<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car', function (Blueprint $table) {
            $table->increments('carid');
            $table->string('partnerid')->comment('采集车辆ID');
            $table->string('carname')->comment('车辆名称');
            $table->string('pic')->comment('车源默认图片');
            $table->string('brandid')->comment('品牌ID');
            $table->string('seriesid')->comment('车系ID');
            $table->string('seriesid_xin')->comment('自定义车系ID');
            $table->string('modeid')->comment('车型ID');
            $table->string('country')->comment('国别（1国产、3合资、2进口）');
            $table->string('structure')->comment('结构（两厢、三厢、掀背、旅行版）');
            $table->string('dealerid')->comment('所属经销商ID');
            $table->string('cityid')->comment('所在城市ID');
            $table->string('sale_city')->comment('销售城市 201,302,403');
            $table->string('price')->comment('全价车全款 半价车一半款出售价格（万元）');
            $table->string('color')->comment('外观颜色');
            $table->string('mileage')->comment('行驶里程（万公里）');
            $table->string('gearbox')->comment('变速箱1自动，2手动');
            $table->string('displacement')->comment('排量');
            $table->string('classlevel')->comment('级别（中型、大型、跑车）');
            $table->string('feature')->comment('扩展属性:1 带牌出售 2 原厂选装 3 新车加价 4 后期改装');
            $table->string('owner')->comment('车主');
            $table->string('mobile')->comment('手机号');
            $table->string('status')->comment('状态1在售2采集器上传中,-1已售,-2已下架（被投诉）-3审核不通过 -4删除 -5待支付（个人发车） -6 审核不通过提交状态');
            $table->date('regist_date')->comment('上牌时间');
            $table->string('is_authentication')->comment('是否认证车源[1认证，-1非认证]');
            $table->string('is_trans_mileage')->comment('是否调过表：0，没有；1，有');
            $table->string('factory_quality_auth')->comment('原厂质保[0非原厂质保,其他对应con_qa表id]');
            $table->string('dealer_quality_auth')->comment('经销商质保[0非经销商质保,其他对应con_qa表id]');
            $table->string('no')->comment('车牌号');
            $table->string('accident_status')->comment('事故状态[-1事故车,1非事故车]');
            $table->string('mortgage')->comment('车辆维护人id');
            $table->string('price_half')->comment('是否是半价车：-1不是1是');
            $table->string('views')->comment('浏览量');
            $table->string('yesterday_views')->comment('昨日浏览量');
            $table->string('type')->comment('1采集器采集，2，经销商web发布，3=个人wap发布的车源 4=经销商app发布 5=个人app发布, 6=个人棚拍发车, 7=C2B帮卖发布 8=合作方发车 100=第三方经销商发车');
            $table->string('type_sale')->comment('销售方式[1个人、2商家、 3 4S直达]');
            $table->string('old_new')->comment('几成新：八成新=8，九成新=9，默认=0');
            $table->string('sortid')->comment('排序值');
            $table->string('type_return')->comment('包退：0=默认 1=30天包退');
            $table->string('type_repair')->comment('保修：0=默认 1=1年保修');
            $table->string('photo_from_system')->comment('0为相机拍摄，1为相册选取');
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
        Schema::drop('car');
    }
}
