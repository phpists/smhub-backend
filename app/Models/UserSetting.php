<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    protected $table = 'users_settings';

    protected $fillable = [
        'user_id',
        'login',
        'password',
        'black_list_status',
        'white_list_status'
    ];
}
