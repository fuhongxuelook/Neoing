<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDialogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dialog', function (Blueprint $table) {
            $table->increments('id');
            $table->char('jid',15)->comment('作品ID');
            $table->string('path')->comment('图片路径');
            $table->string('url')->comment('跳转URL');
            $table->date('dt')->comment('日期');
            $table->integer('status')->comment('状态');
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
        Schema::drop('dialog');
    }
}
