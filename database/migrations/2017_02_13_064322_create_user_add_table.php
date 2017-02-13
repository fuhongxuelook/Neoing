<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_add', function (Blueprint $table) {
            $table->increments('id');
            $table->int('uid')->comment('用户id');
            $table->int('provice_code')->comment('省代码');
            $table->int('city_code')->comment('市代码');
            $table->int('country_code')->comment('县代码');
            $table->int('town_code')->comment('镇代码');
            $table->int('district')->comment('区代码');
            $table->int('accept')->comment('收件人');
            $table->string('addition')->comment('附加地址');
            $table->string('add_notice')->comment('地址备注');
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
        Schema::drop('user_add');
    }
}
