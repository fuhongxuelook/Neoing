<?php

namespace Neo\Asset\Engine\Jelly;

//use Neo\Asset\Schema\Project\ProjectSchema as Schema;
//use Neo\Asset\Bean\Project\ProjectBean;
//use Neo\Asset\Config\ProjectConfig as Conf;
//use Illuminate\Support\Facades\Storage;

class JellyService  {

	function __construct() {
	}


    public function route() {
        $route = array(
            'jump' => '/module/index',
            'sale' => '/upload/index',
        );
        return $route;
    }

    public function jelly() {
        $jelly = array(
            'src' => 'artNet/img/20171106132355226c63d5096.jpg@800h_800w_0e_1l.src',
            'name' => '角落'
        );
        return $jelly;
    }

    public function header() {
        $header = array(
            array(
                'name' => 'home',
                'url'  => 'niao.com'
            ),
            array(
                'name' =>  '鸟布鲸',
                'url'  => '/home/page'
            ),
            array(
                'name' => '四川美术学院',
                'url'  => '/module/list'
            ),
            array(
                'name' => '角落',
                'url'  => '/art/jelly'
            ),
        );
        return $header;
    }

    public function recommend() {
        $recommends = array(
            array(
                'url' => 'https://www.ywart.com/artworks/1kdjxn',
                'src' => 'artNet/img/2016042516240267358752462.jpg_small01',
                'name' => '乙未雲山系列',
                'width' => '970.616px',
            ),
            array(
                'url' => 'https://www.ywart.com/artworks/1xdy06',
                'src' => 'artNet/img/20160425161124960dc47949b.jpg_small01',
                'name' => '甲子．光明净心',
                'width' => '167.096px',
            ),
            array(
                'url' => 'https://www.ywart.com/artworks/16lm1j',
                'src' => 'artNet/img/201607141720096578910c17c.jpg_small01',
                'name' => '无题5',
                'width' => '220.424px'
            ),
            array(
                'url' => 'https://www.ywart.com/artworks/1x77m6',
                'src' => 'artNet/img/loadingdetailimg.gif',
                'name' => '清气',
                'width' => '522.149px'
            ),
        );
        return $recommends;
    }

    public function brief() {
        return array(
            'writer' => '桑榆未晚',
            'content' => '细腻的、看似没有秩序的笔触在画布上呈现着现实景象的另一种观看方式，它们如被蒙上一层不断变化的情绪，静止的事物便像被赋予生命一般，在热闹而安静的角落，跳跃着自己的脚步。'
        );
    }

    public function introduce () {
        $introduce = array(
            array(
                'src' => 'artNet/img/20171106132400898d02b6bca.jpg@1e_1c_0o_0l_90Q_600h_600w.src',
                'content' => '刘川作品中的人群面目模糊，身体僵硬，被挤压在狭小的空间中不知所措。通过这些作品，刘川探讨了现代生活方式对人的巨大影响。——雅昌画廊',
            ),
            array(
                'src' => 'artNet/img/20171106132400930d7681766.jpg@1e_1c_0o_0l_90Q_600h_600w.src',
                'content' => '他略带怜悯地嘲讽了身不由己的人们的状态，并且不怀好意地让他们互相攻击，而刘川则在一旁静静地观赏，并且自得其乐。他之所以这么做，也许只是想让这些表情镇定，内心却已打得头破血流的现代人们明白赛南古的那句话：“人并不绝非需要一座都城”。——雅昌画廊',
            ),
            array(
                'src' => 'artNet/img/201711061324009767d4de458.jpg@1e_1c_0o_0l_90Q_600h_600w.src',
                'content' => '艺术家签名、创作日期。',
            ),
        );
        return $introduce;
    }

    public function artWorks() {
        $artworks = array(
            array(
                'url' => 'https://www.ywart.com/artworks/1reekp',
                'src' => 'artNet/img/20160526154445336db48dd26.jpg@460h_576w_1e_1c_1wh_1pr',
                'name' => '无题 1',
                'material' => '综合材料',
                'size' => '60x50cm',
                'date' => '2015',
                'price' => '¥9,050',
            ),
            array(
                'url' => 'https://www.ywart.com/artworks/11vjm2',
                'src' => 'artNet/img/2017110613232246195991847.jpg@460h_576w_1e_1c_1wh_1pr',
                'name' => '赏石',
                'material' => '布面丙烯',
                'size' => '100x80cm',
                'date' => '2016',
                'price' => '¥24,350',
            ),
            array(
                'url' => 'https://www.ywart.com/artworks/1p7818',
                'src' => 'artNet/img/20171106132426164d3ee9e1d.jpg@460h_576w_1e_1c_1wh_1pr',
                'name' => '无题',
                'material' => '综合材料',
                'size' => '60x50cm',
                'date' => '2017',
                'price' => '¥50',
            ),
        );
        return $artworks;
    }

    public function author () {
        $author = array(
            'url' => 'https://www.ywart.com/artist/1350dd',
            'src' => 'artNet/img/152327814Tst
HLARFOZwNCIpJ.jpg_small01',
            'name' => '刘川',
            'bgurl' => 'https://cdn.ywart.com/material/artistIcon/ywart_artist_icon_level_0.png',
            'num' => 6,
        );
        return $author;
    }
   
}