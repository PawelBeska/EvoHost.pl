<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\AdminEditSettingsRequest;
use App\Movie;
use App\Server;
use App\Setting;
use App\User;
use HTMLMin\HTMLMin\Facades\HTMLMin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;

class AdminSettingsController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:admin');
    }
    public function settings()
    {
        $view = view('admin.pages.settings');
        return  HTMLMin::blade($view);

    }
    public function edit(AdminEditSettingsRequest $request)
    {
        $input = $request->all();
        $message = new MessageBag();
        unset($input['_token']);
        foreach (array_keys($input) as $key) {
            if ($item = Setting::where('name', $key)->first()) {
                $item->update(['value' => $input[$key]]);
            } else {
                Setting::create(['name' => $key, 'value' => $input[$key]]);
            }
        }
        $message->add('success', "Pomyślnie edytowano ustawienia!");
        return $message->jsonSerialize();
    }
}
