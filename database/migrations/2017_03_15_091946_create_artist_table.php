<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist', function (Blueprint $table) {
            $table->increments('id');
            $table->string('artist')->comment('画家')
            $table->int('tel')->comment('手机');
            $table->int('product_id')->comment('产品id');
            $table->int('circle_id')->comment('个人空间ID');
            $table->int('univercity_id')->comment('大学ID');
            $table->string('nickname')->comment('网名');
            $table->int('sex')->comment('性别');
            $table->int('addr_id')->comment('地址');
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
    }
}
