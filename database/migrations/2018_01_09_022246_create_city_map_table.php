<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityMapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_map', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cityid')->comment('城市ID');
            $table->char('provinceid',1)->comment('省份ID');
            $table->string('name',1)->comment('城市名');
            $table->string('ename')->comment('拼音');
            $table->char('eshort',2)->comment('简拼');
            $table->string('near')->comment('附近');
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
        Schema::drop('city_map');
    }
}
