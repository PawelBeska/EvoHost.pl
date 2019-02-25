<?php

namespace App\Http\Controllers\Admin;


use App\Group;
use App\Http\Requests\AdminCreateGroupRequest;
use App\Http\Requests\AdminEditGroupRequest;
use App\Http\Requests\AdminRemoveGroupRequest;
use App\Http\Requests\AdminViewGroupRequest;
use App\Http\Controllers\Controller;
use HTMLMin\HTMLMin\Facades\HTMLMin;
use Illuminate\Support\MessageBag;
use Yajra\DataTables\Facades\DataTables;

class AdminGroupsController extends Controller
{

    public function index()
    {
        $view = view('admin.pages.groups');
        return HTMLMin::blade($view);
    }
    public function create(AdminCreateGroupRequest $request)
    {
        $message = new MessageBag();
        $input = $request->all();
        Group::create(['name'=>$input['name']]);
        $message->add('success', "Pomyślnie stworzono grupę!");
        return $message->jsonSerialize();

    }
    public function remove(AdminRemoveGroupRequest $request,$id)
    {
        $message = new MessageBag();
        if(Group::find($id)->count())
        {
            Group::find($id)->delete();
            $message->add('success', "Pomyślnie usunięto grupę!");
            return $message->jsonSerialize();
        }
        return abort(404);
    }
    public function edit(AdminEditGroupRequest $request,$id)
    {
        $input = $request->all();
        $message = new MessageBag();
        if(Group::find($id)->count())
        {
                Group::find($id)->update(['name'=>$input['name']]);
                $message->add('success', "Pomyślnie edytowano grupę!");
            return $message->jsonSerialize();
        }
        return abort(404);
    }
    public function datatable(AdminViewGroupRequest $request)
    {
        return DataTables::of(Group::all())->editColumn('count','{!! \App\Group::find($id)->users()->count() !!}')->make(true);
    }
}
