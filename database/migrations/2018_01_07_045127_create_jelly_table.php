<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJellyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jelly', function (Blueprint $table) {
            $table->increments('id');
            $table->char('uid',15)->comment('作品ID');
            $table->string('name')->comment('作品名称');
            $table->string('author')->comment('作品作者');
            $table->string('author_en')->comment('作品作者英文名');
            $table->string('author_src')->comment('作品作者图片路径');
            $table->string('category_id')->comment('大类');
            $table->string('class_id')->comment('类');
            $table->string('type_id')->comment('类型');
            $table->string('style')->comment('风格');
            $table->float('price', 8, 2)->comment('价格');
            $table->integer('size_wight')->comment('作品宽度');
            $table->integer('size_height')->comment('作品高度');
            $table->integer('status')->comment('作品状态');
            $table->string('h5_url')->comment('作品h5链接');
            $table->string('label')->comment('标签');
            $table->string('content')->comment('说明');
            $table->string('path')->comment('图片路径');
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
        Schema::drop('jelly');
    }
}
