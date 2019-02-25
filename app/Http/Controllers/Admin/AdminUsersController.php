<?php

namespace App\Http\Controllers\Admin;


use App\Group;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Requests\AdminCreateUserRequest;
use App\Http\Requests\AdminEditUserRequest;
use App\Http\Requests\AdminRemoveUserRequest;
use App\Http\Requests\AdminViewUserRequest;
use App\Movie;
use App\Server;
use App\User;
use HTMLMin\HTMLMin\Facades\HTMLMin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;
use Yajra\DataTables\Facades\DataTables;

class AdminUsersController extends Controller
{

    public function index()
    {
        $view = view('admin.pages.users');
        $view->with('groups',Group::pluck('name', 'id'));
        return HTMLMin::blade($view);
    }
    public function create(AdminCreateUserRequest $request)
    {
        $message = new MessageBag();
        $input = $request->all();
        if(!User::where('name',$input['name'])->count()) {
            if (!User::where('email',$input['email'])->count()) {
                User::create(['name' => $input['name'], 'password' => bcrypt($input['password']), 'email' => $input['email'], 'group' => $input['group']]);
                $message->add('success', "Pomyślnie stworzono użytkownika!");
            }else{
                $message->add('error', "Użytkownik z takim emailem już istnieje!");
            }
        }else{
            $message->add('error', "Użytkownik z takim loginem już istnieje!");
        }
        return $message->jsonSerialize();

    }
    public function remove(AdminRemoveUserRequest $request,$id)
    {
        $message = new MessageBag();
        if(User::find($id)->count())
        {
            User::find($id)->delete();
            $message->add('success', "Pomyślnie usunięto użytkownika!");
            return $message->jsonSerialize();
        }
        return abort(404);
    }
    public function edit(AdminEditUserRequest $request,$id)
    {
        $input = $request->all();
        $message = new MessageBag();
        if(User::find($id)->count())
        {
            if(isset($input['password'])&&isset($input['group']))
            {
                User::find($id)->update(['balance'=>$input['balance'],'name'=>$input['name'],'group'=>$input['group'],'password'=>bcrypt($input['password']),'email'=>$input['email']]);
                $message->add('success', "Pomyślnie edytowano użytkownika!");

            }
            elseif(isset($input['password']))
            {
                User::find($id)->update(['balance'=>$input['balance'],'name'=>$input['name'],'password'=>bcrypt($input['password']),'email'=>$input['email']]);
                $message->add('success', "Pomyślnie edytowano użytkownika!");
            }
            elseif (isset($input['group']))
            {
                User::find($id)->update(['balance'=>$input['balance'],'name'=>$input['name'],'group'=>$input['group'],'email'=>$input['email']]);
                $message->add('success', "Pomyślnie edytowano użytkownika!");

            }else{

                User::find($id)->update(['balance'=>$input['balance'],'name'=>$input['name'],'email'=>$input['email']]);
                $message->add('success', "Pomyślnie edytowano użytkownika!");
            }
            return $message->jsonSerialize();
        }
        return abort(404);
    }
    public function datatable(AdminViewUserRequest $request)
    {
        return DataTables::of(User::all())->editColumn('group','{!! \App\Group::find($group)->name !!}')->editColumn('movies','{!! \App\User::find($id)->movies()->count() !!}')->make(true);
    }
}
