<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->int('uid')->comment('用户id');
            $table->string('name')->comment('商品名称');
            $table->int('category')->comment('大类类别');
            $table->int('class')->comment('类别');
            $table->float('price')->comment('价格');
            $table->string('marks')->comment('商品备注');
            $table->string('pic')->comment('图片');
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
        Schema::drop('works');
        //
    }
}
