<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->increments('id');
            $table->int('uid')->comment('用户id');
            $table->int('sex')->comment('性别');
            $table->char('tel',11)->comment('手机号');
            $table->int('addr')->comment('地址');
            $table->int('university')->comment('大学');
            $table->int('name')->comment('姓名');
            $table->int('accept')->comment('收件人');
            $table->string('notice')->comment('备注');
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
        Schema::drop('user_info');
    }
}
