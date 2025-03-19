<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UserIp extends Model
{
    protected $table = 'users_ips';

    /**
     * type id
     */
    const BLACK_LIST = 1;
    const WHITE_LIST = 2;

    protected $fillable = [
        'user_id',
        'ip',
        'type_ip'
    ];
}
