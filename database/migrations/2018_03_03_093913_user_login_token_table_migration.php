<?php

use App\Inside\Constants;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserLoginTokenTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Constants::USERS_LOGIN_TOKEN_DB, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('login');
            $table->string('token');
            $table->integer('expire_at')->default(0);
            $table->integer('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Constants::USERS_LOGIN_TOKEN_DB);
    }
}
