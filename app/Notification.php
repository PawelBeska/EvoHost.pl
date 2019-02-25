<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['user','text'];
    public function user()
    {
        return $this->belongsTo('App\User','user','id')->first();
    }
    /*
     * Notifications for group
     */
    public static function NFG($notification,$group='admin')
    {
        if(Group::grups($group)) {
            foreach (User::where('group', Group::grups($group))->select('id')->get() as $user) {
                self::create(['text' => $notification, 'user' => $user->id]);

            }
            return true;
        }
        return error_log('grupa nie istnieje!');

    }
}
