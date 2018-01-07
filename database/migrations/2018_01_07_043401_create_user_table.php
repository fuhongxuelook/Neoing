<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->char('uid',15)->comment('用户ID');
            $table->string('account')->comment('账号');
            $table->string('password')->comment('密码');
            $table->string('tel')->comment('手机');
            $table->string('mail')->comment('邮箱');
            $table->integer('state')->comment('账号状态');
            $table->integer('auth')->comment('权限');
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::drop('user');
    }
}
