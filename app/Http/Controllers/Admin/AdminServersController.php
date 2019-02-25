<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminCreatePermissionRequest;
use App\Http\Requests\AdminCreateServerRequest;
use App\Http\Requests\AdminEditPermissionRequest;
use App\Http\Requests\AdminEditServerRequest;
use App\Http\Requests\AdminRemovePermissionRequest;
use App\Http\Requests\AdminRemoveServerRequest;
use App\Http\Requests\AdminTurnOffServerRequest;
use App\Http\Requests\AdminTurnOnServerRequest;
use App\Http\Requests\AdminViewServerRequest;
use App\Http\Controllers\Controller;
use App\Server;
use HTMLMin\HTMLMin\Facades\HTMLMin;
use Illuminate\Support\MessageBag;
use Yajra\DataTables\Facades\DataTables;


class AdminServersController extends Controller
{

    public function index()
    {
        Server::check();
        $view = view('admin.pages.servers');
        return HTMLMin::blade($view);
    }
    public function create(AdminCreateServerRequest $request)
    {
        $message = new MessageBag();
        $input = $request->all();
        Server::create(['name' => $input['name'], 'ip' => $input['ip']]);
        $message->add('success', "Pomyślnie dodano serwer!");

        return $message->jsonSerialize();

    }
    public function remove(AdminRemoveServerRequest $request,$id)
    {
        $message = new MessageBag();
        if(Server::find($id)->count())
        {
            Server::find($id)->delete();
            $message->add('success', "Pomyślnie usunięto serwer!");
            return $message->jsonSerialize();
        }
        return abort(404);
    }
    public function edit(AdminEditServerRequest $request,$id)
    {
        $input = $request->all();
        $message = new MessageBag();
        if(Server::find($id)->count())
        {

            Server::find($id)->update(['name' => $input['name'], 'ip' => $input['ip']]);
            $message->add('success', "Pomyślnie edytowano serwer!");
            return $message->jsonSerialize();
        }
        return abort(404);
    }
    public function turn_on(AdminTurnOnServerRequest $request, $id)
    {

        $message = new MessageBag();
        if(Server::find($id)->count()) {
            $input = $request->all();

            $connection = ssh2_connect(Server::find($id)->name, 22);



            if (ssh2_auth_password($connection, $input['name'], $input['password'])) {
                $stream = ssh2_exec($connection, 'php /var/www/html/artisan server:start');
                $message->add('success', "Pomyślnie włączono serwer!");
            } else {
                $message->add('error', "Podane dane są niewłaściwe!");
            }
            return $message->jsonSerialize();
        }else{
            $message->add('error', "Podany serwer nie istnieje!");
            return $message->jsonSerialize();
        }


    }
    public function turn_off(AdminTurnOffServerRequest $request, $id)
    {

        $message = new MessageBag();
        if(Server::find($id)->count()) {
            $input = $request->all();
            $connection = ssh2_connect(Server::find($id)->name, 22);


            if (ssh2_auth_password($connection, $input['name'], $input['password'])) {
                $stream = ssh2_exec($connection, 'killall -9 php');
                $message->add('success', "Pomyślnie wyłączono serwer!");
            } else {
                $message->add('error', "Podane dane są niewłaściwe!");
            }
            return $message->jsonSerialize();

        }else{
            $message->add('error', "Podany serwer nie istnieje!");
            return $message->jsonSerialize();
        }
    }
    public function datatable(AdminViewServerRequest $request)
    {
        return DataTables::of(Server::all())->escapeColumns([])->editColumn('buttons','{!!App\Server::find($id)->buttons() !!}')->editColumn('status', '<label class="label label-{{App\Server::find($id)->status()->color}}">'.'{{App\Server::find($id)->status()->name}}</label>')->make(true);
    }
}
