<?php

namespace App;

use App\Inside\Constants;
use Illuminate\Database\Eloquent\Model;

class UsersLoginTokenLog extends Model
{
    protected $table = Constants::USERS_LOGIN_TOKEN_LOG_DB;
    protected $fillable = ['login', 'type', 'token', 'expire_at', 'created_at'];
    public $timestamps = false;
}
