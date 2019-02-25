<?php namespace App\Http\DBSettings;

/*
 * DBS
 */

use App\Setting;
use Illuminate\Support\Facades\Facade;

class DBSettingsFacade extends Facade
{

    public static function getFacadeAccessor()
    {
        return 'DBS';
    }

    public static function get($name)
    {
        if ($setting = Setting::where('name', $name)->first()) {
            return $setting->value;
        }
    }

    public static function getBoolean($name)
    {
        if ($setting = Setting::where('name', $name)->first()) {
            if ($setting->value == 'true') {
                return true;
            } else {
                return false;
            }
        }
    }

    public static function all()
    {
        return Setting::all();
    }
}
