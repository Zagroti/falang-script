<?php

namespace App;

use App\Inside\Constants;
use Illuminate\Database\Eloquent\Model;

class UsersLoginToken extends Model
{
    protected $table = Constants::USERS_LOGIN_TOKEN_DB;
    protected $fillable = ['login', 'token', 'expire_at', 'created_at'];
    public $timestamps = false;
}
