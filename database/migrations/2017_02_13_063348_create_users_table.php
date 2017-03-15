<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account')->unique()->comment('账号');
            $table->string('password')->comment('密码');
            $table->int('tel')->comment('手机');
            $table->int('product_id')->comment('产品id');
            $table->string('nickname')->comment('网名');
            $table->int('state')->comment('账号状态');
            $table->int('sex')->comment('性别');
            $table->int('addr_id')->comment('id');
            $table->int('Authorization')->comment('权限');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('users');
    }
}
