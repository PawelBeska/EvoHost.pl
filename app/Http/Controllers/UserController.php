<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserAddRemoteRequest;
use App\Http\Requests\UserChangeEmailRequest;
use App\Http\Requests\UserChangePasswordRequest;
use App\Http\Requests\UserEditMoviesRequest;
use App\Http\Requests\UserRemoveMoviesRequest;
use App\Http\Requests\UserRemoveNotificationsRequest;
use App\Http\Requests\UserViewMoviesRequest;
use App\Movie;
use App\Notification;
use App\Statusfile;
use HTMLMin\HTMLMin\Facades\HTMLMin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{

    public function my_account()
    {
        $view = HTMLMin::blade(view('pages.user.user'));
        return $view;
    }
    public function my_movies()
    {
        $view = HTMLMin::blade(view('pages.user.movies'));
        return $view;
    }
    public function remove_movies(UserRemoveMoviesRequest $request, $id)
{


    $message = new MessageBag();
    if(Auth::user()->movies()->find($id)->count()&&Auth::user()->movies()->find($id)->status==Statusfile::statuses('wait_for_admin'))
    {
        Auth::user()->movies()->find($id)->delete();
        $message->add('success', "Pomyślnie usunięto film!");
        return $message->jsonSerialize();
    }
    elseif(Auth::user()->movies()->find($id)->count()&&Auth::user()->movies()->find($id)->status==Statusfile::statuses('wait_for_remove'))
    {
        $message->add('success', "Plik czeka na usunięcie!");
        return $message->jsonSerialize();
    }elseif(Auth::user()->movies()->find($id)->count()&&Auth::user()->movies()->find($id)->status==Statusfile::statuses('downloaded')){
        Auth::user()->movies()->find($id)->update(['status'=>Statusfile::statuses('wait_for_remove')]);
        $message->add('success', "Pomyślnie dodano plik do usunięcia!");
        return $message->jsonSerialize();
    } elseif(Auth::user()->movies()->find($id)->count()&&Auth::user()->movies()->find($id)->status==Statusfile::statuses('bad_format')){
        Auth::user()->movies()->find($id)->delete();
        $message->add('success', "Pomyślnie usunięto film!");
        return $message->jsonSerialize();
    }
}
    public function edit_movies(UserEditMoviesRequest $request,$id)
    {
        $input = $request->all();
        $message = new MessageBag();
        if(Auth::user()->movies()->where('id',$id)->count())
        {
            Auth::user()->movies()->where('id',$id)->first()->update(['name'=>$input['name']]);
            $message->add('success', "Pomyślnie zmieniono nazwę!");
            return $message->jsonSerialize();
        }
        return abort(404);

    }
    public function add_remote_download()
    {

        $view = view('pages.user.remote');
        return HTMLMin::blade($view);
    }
    public function add_remote_download_post(UserAddRemoteRequest $request)
    {
        /*
         * STATUSY MOVIES
         * 1 - CZEKA NA ZATWIERDZENIE
         * 2 - Zatwierdzony przez administratora
         * 3 - Pobierany przez serwer
         * 4 - Pobrany przez serwer
         * 5 - Do usunięcia(*)
         * 6 - Przenosiny(*)
         * (*) - WKRÓTCE
         */
        $input = $request->all();
        $message = new MessageBag();
        $list = preg_split('/\r\n|\r|\n/', $input['sources']);
        foreach ($list as $source) {
            if ($source) {
                if (Movie::where('remote_source', $source)->count() == 0) {
                    if (filter_var($source, FILTER_VALIDATE_URL)) {
                        Movie::create(['author'=>Auth::user()->id,'remote'=>1,'remote_source'=>$source,'status'=>Statusfile::statuses('wait_for_admin')]);
                        $message->add('success', "Pomyśnie dodano materiał: (".$source.')'."\n");
                        Notification::NFG('Masz nowy <a href="">materiał</a> do zatwierdzenia!');
                    } else {
                        $message->add('error', "Ten materiał ma niewłaściwy format! (" . $source . ")"."\n");
                    }
                } else {
                    $message->add('error', "Mamy już ten materiał! (" . $source . ")"."\n");
                }
            }
        }
        return $message->jsonSerialize();
    }
    public function add_remote_search($title)
    {

    }
    public function edit_my_account_email(UserChangeEmailRequest $request)
    {
        $message = new MessageBag();
        $input = $request->all();
        Auth::user()->update(['email'=>strtolower($input['email'])]);
        $message->add('success', "Pomyśnie zmieniono email!");
        return $message->jsonSerialize();

    }
    public function edit_my_account_password(UserChangePasswordRequest $request)
    {
        $message = new MessageBag();
        $input = $request->all();
        Auth::user()->update(['password'=>bcrypt($input['newpassword'])]);
        $message->add('success', "Pomyśnie zmieniono hasło!");
        return $message->jsonSerialize();
    }
    public function notifications(UserViewMoviesRequest $request)
    {
        if($request->ajax())
        {
return Auth::user()->notifications()->select('text','id','created_at')->get();
        }
         abort(404);
    }
    public function notification_remove(UserRemoveNotificationsRequest $request, $id)
    {
        if($request->ajax())
        {
            if(Auth::user()->notifications()->where('id',$id)->count())
            {
                Auth::user()->notifications()->where('id',$id)->first()->delete();
                return Auth::user()->notifications()->count();
            }
            return abort(404);
        }
        return abort(404);
    }

}
