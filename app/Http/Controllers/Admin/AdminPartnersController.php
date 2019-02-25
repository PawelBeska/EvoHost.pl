<?php

namespace App\Http\Controllers\Admin;


use App\Group;
use App\Http\Requests\AdminCreatePartnerRequest;
use App\Http\Requests\AdminEditPartnerRequest;
use App\Http\Requests\AdminRemovePartnerRequest;
use App\Http\Requests\AdminViewPartnerRequest;
use App\Movie;
use App\Server;
use App\User;
use Carbon\Carbon;
use HTMLMin\HTMLMin\Facades\HTMLMin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;
use Yajra\DataTables\DataTables;

class AdminPartnersController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:admin');
    }
    public function index()
    {
        $view = view('admin.pages.partners');

        return  HTMLMin::blade($view);

    }
    public function create(AdminCreatePartnerRequest $request)
    {
        $message = new MessageBag();
        $input = $request->all();
        if(!User::where('name',$input['name'])->count()) {
            if (!User::where('email',$input['email'])->count()) {
                User::create(['name' => $input['name'], 'password' => bcrypt($input['password']), 'email' => $input['email'], 'group' => Group::grups('partner')]);
                $message->add('success', "Pomyślnie stworzono partnera!");
            }else{
                $message->add('error', "Partner z takim emailem już istnieje!");
            }
        }else{
            $message->add('error', "Partner z takim loginem już istnieje!");
        }
        return $message->jsonSerialize();

    }
    public function remove(AdminRemovePartnerRequest $request,$id)
    {
        $message = new MessageBag();
        if(User::find($id)->count())
        {
            User::find($id)->delete();
            $message->add('success', "Pomyślnie usunięto partnera!");
            return $message->jsonSerialize();
        }
        return abort(404);
    }
    public function edit(AdminEditPartnerRequest $request,$id)
    {
        $input = $request->all();
        $message = new MessageBag();
        if(User::find($id)->count())
        {
            if(isset($input['password']))
            {
                User::find($id)->update(['name'=>$input['name'],'password'=>bcrypt($input['password']),'email'=>$input['email']]);
                $message->add('success', "Pomyślnie edytowano partnera!");
            }else {

                User::find($id)->update(['name'=>$input['name'],'email'=>$input['email'],'balance'=>$input['balance'],'site'=>$input['site']]);
                $message->add('success', "Pomyślnie edytowano partnera!");
            }
            return $message->jsonSerialize();
        }
        return abort(404);
    }
    public function datatable(AdminViewPartnerRequest $request)
    {
        return DataTables::of(User::where('group',Group::grups('partner'))->get())->editColumn('movies','{!! \App\Movie::where("author",$id)->count() !!}')->make(true);
    }
}
