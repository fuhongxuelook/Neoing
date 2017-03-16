<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCircleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('circle', function (Blueprint $table) {
            $table->increments('id');
            $table->int('zone')->comment('空间')
            $table->int('univercity')->comment('大学');
            $table->int('hoh')->comment('home of homeless');
            $table->int('style')->comment('风格流派');
            $table->rememberToken();
            $table->timestamps();
        });
        //

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
