<?php

namespace App\Http\Controllers\Admin;


use App\Group;
use App\Http\Requests\AdminAcceptFileRequest;
use App\Http\Requests\AdminCreateGroupRequest;
use App\Http\Requests\AdminDiscardFileRequest;
use App\Http\Requests\AdminEditFileRequest;
use App\Http\Requests\AdminEditGroupRequest;
use App\Http\Requests\AdminRemoveFileRequest;
use App\Http\Requests\AdminRemoveGroupRequest;
use App\Http\Requests\AdminViewFileRequest;
use App\Http\Requests\AdminViewGroupRequest;
use App\Http\Controllers\Controller;
use App\Movie;
use App\Statusfile;
use HTMLMin\HTMLMin\Facades\HTMLMin;
use Illuminate\Support\MessageBag;
use Yajra\DataTables\Facades\DataTables;

class AdminFilesController extends Controller
{


    public function index()
    {
        $view = view('admin.pages.files');
        return  HTMLMin::blade($view);
    }
    public function remove(AdminRemoveFileRequest $request,$id)
    {
        $message = new MessageBag();
        if(Movie::find($id)->count())
        {
            Movie::find($id)->update(['status'=>Statusfile::statuses('wait_for_remove')]);
            $message->add('success', "Pomyślnie dodano pliki do usunięcia!");
            return $message->jsonSerialize();
        }
        return abort(404);
    }
    public function edit(AdminEditFileRequest $request,$id)
    {
        $input = $request->all();
        $message = new MessageBag();
        if(Movie::find($id)->count())
        {
                Movie::find($id)->update(['name'=>$input['name']]);
                $message->add('success', "Pomyślnie edytowano plik!");
            return $message->jsonSerialize();
        }
        return abort(404);
    }
    public function discard(AdminDiscardFileRequest $request,$id)
    {
        $input = $request->all();
        $message = new MessageBag();
        if(Movie::find($id)->count()&&Movie::find($id)->status==Statusfile::statuses('wait_for_admin'))
        {
            Movie::find($id)->delete();
            $message->add('success', "Pomyślnie edytowano plik!");
            return $message->jsonSerialize();
        }
        return abort(404);
    }
    public function accept(AdminAcceptFileRequest $request, $id)
    {
        $input = $request->all();
        $message = new MessageBag();
        if(Movie::find($id)->count()&&Movie::find($id)->status==Statusfile::statuses('wait_for_admin'))
        {
            Movie::find($id)->update(['status'=>Statusfile::statuses('wait_for_download')]);
            $message->add('success', "Pomyślnie zaakceptowano plik!");
            return $message->jsonSerialize();
        }
        return abort(404);
    }
    public function datatable(AdminViewFileRequest $request)
    {
        return DataTables::of(Movie::all())->escapeColumns([])->editColumn('buttons','{!!App\Movie::find($id)->buttons() !!}')->editColumn('status', '<label class="label label-{{App\Movie::find($id)->status()->color}}">'.'{{App\Movie::find($id)->status()->name}}</label>')->editColumn('url', '@if(App\Movie::find($id)->url())<a class="white" href="{{App\Movie::find($id)->url()}}" >Link</a> @else BRAK @endif')->editColumn('author','{!! \App\Movie::find($id)->author()->name !!}')->editColumn('server',' @if(\App\Movie::find($id)->server) {!! \App\Movie::find($id)->server()->ip !!} @else Brak serwera @endif ')->make(true);
    }
}
