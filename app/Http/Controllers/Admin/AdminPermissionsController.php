<?php

namespace App\Http\Controllers\Admin;


use App\Group;
use App\Http\Requests\AdminCreatePermissionRequest;
use App\Http\Requests\AdminEditPermissionRequest;
use App\Http\Requests\AdminRemovePermissionRequest;
use App\Http\Requests\AdminViewPermissionRequest;
use App\Permission;
use App\Http\Controllers\Controller;
use HTMLMin\HTMLMin\Facades\HTMLMin;
use Illuminate\Support\MessageBag;
use Yajra\DataTables\Facades\DataTables;

class AdminPermissionsController extends Controller
{

    public function index()
    {
        $view = view('admin.pages.permissions');
        $view->with('groups',Group::pluck('name', 'id'));
        return HTMLMin::blade($view);
    }
    public function create(AdminCreatePermissionRequest $request)
    {
        $message = new MessageBag();
        $input = $request->all();
        if(Group::find($input['group'])->count()) {
            Permission::create(['name' => $input['name'], 'group' => $input['group']]);
            $message->add('success', "Pomyślnie dodano permisję!");
        }else{
            return abort(404);
        }
        return $message->jsonSerialize();

    }
    public function remove(AdminRemovePermissionRequest $request,$id)
    {
        $message = new MessageBag();
        if(Permission::find($id)->count())
        {
                Permission::find($id)->delete();
                $message->add('success', "Pomyślnie usunięto permisję!");
                return $message->jsonSerialize();
        }
        return abort(404);
    }
    public function edit(AdminEditPermissionRequest $request,$id)
    {
        $input = $request->all();
        $message = new MessageBag();
        if(Permission::find($id)->count())
        {
            if(Group::find($input['group'])->count()) {
                Permission::find($id)->update(['name' => $input['name'], 'group' => $input['group']]);
                $message->add('success', "Pomyślnie edytowano permisję!");
                return $message->jsonSerialize();
            }
            return abort(404);
        }
        return abort(404);
    }
    public function datatable(AdminViewPermissionRequest $request)
    {
        return DataTables::of(Permission::all())->editColumn('group','{!! \App\Permission::find($id)->group()->name !!}')->make(true);
    }
}
