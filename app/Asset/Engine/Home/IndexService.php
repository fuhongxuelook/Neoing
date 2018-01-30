<?php

namespace Neo\Asset\Engine\Home;

//use Neo\Asset\Schema\Project\ProjectSchema as Schema;
//use Neo\Asset\Bean\Project\ProjectBean;
//use Neo\Asset\Config\ProjectConfig as Conf;
//use Illuminate\Support\Facades\Storage;

class IndexService  {

    function __construct() {
    }


    public function theme() {
        $themes = array(
            array(
                'path' => 'Pctpl/Home/Public/images/Index/20180114banner02.jpg',
                'url'  => 'home/page',
            ),
            array(
                'path' => 'Pctpl/Home/Public/images/Index/20180114banner01.jpg',
                'url'  => 'home/page',
            ),
            array(
                'path' => 'Pctpl/Home/Public/images/pc/1211banner04.jpg',
                'url'  => 'home/page',
            ),
            array(
                'path' => 'Pctpl/Home/Public/images/pc/1490685075590.jpg',
                'url'  => 'home/page',
            ),
            array(
                'path' => 'Pctpl/Home/Public/images/pc/1211banner01.jpg',
                'url'  => 'home/page',
            ),
            array(
                'path' => 'Pctpl/Home/Public/images/pc/1211banner03.jpg',
                'url'  => 'home/page',
            ),
        );
        return $themes;
    }
    
    public function category() {
        $category = array(
            array(
                'path' => '/Pctpl/Home/Public/images/pc/1490327989706.png',
                'url'  => 'home/page',
            ),
            array(
                'path' => '/Pctpl/Home/Public/images/pc/1490326932783.png',
                'url'  => 'home/page',
            ),
            array(
                'path' => '/Pctpl/Home/Public/images/pc/1490323515250.png',
                'url'  => 'home/page',
            ),
            array(
                'path' => '/Pctpl/Home/Public/images/pc/1490325755542.png',
                'url'  => 'home/page',
            ),
            array(
                'path' => '/Pctpl/Home/Public/images/pc/1490260622270.jpg',
                'url'  => 'home/page',
            ),
            array(
                'path' => '/Pctpl/Home/Public/images/pc/1490326477972.png',
                'url'  => 'home/page',
            ),
        );
        return $category;
       
    }

    public function recommend() {
        $recommends = array(
            array(
                'url' => 'market/jelly',
                'src' => '/Pctpl/Home/Public/images/pc/1490072433234.jpg',
                'author' => '陈建周',
                'content' => '梦想的世界，没有语言和声音一样绚丽多彩',
                'price' => 260
            ),
            array(
                'url' => 'market/jelly',
                'src' => '/Pctpl/Home/Public/images/pc/1490075211271.jpg',
                'author' => '小怪兽',
                'content' => '每个人心中都有一只小怪兽，从年幼到迟暮，和我们一起成长，一起对世界始终充满好奇心和热情。',
                'price' => 260
            ),
            array(
                'url' => 'market/jelly',
                'src' => '/Pctpl/Home/Public/images/pc/1490075444696.jpg',
                'author' => '少女猫咪',
                'content' => '不用担心，总有一天，你也会拥有一只你自己的猫',
                'price' => 260
            ),
            array(
                'url' => 'market/jelly',
                'src' => '/Pctpl/Home/Public/images/pc/1490072989607.jpg',
                'author' => '卷卷',
                'content' => '卷卷传递出的爱的讯息和“有爱就有幸福”的理念',
                'price' => 260
            ),
            array(
                'url' => 'market/jelly',
                'src' => '/Pctpl/Home/Public/images/pc/1490338321679.jpg',
                'author' => '欣小叶',
                'content' => '欣小叶是搜猎人原创，为贵州欣港湾休闲综合体定制',
                'price' => 260
            ),
            array(
                'url' => 'market/jelly',
                'src' => '/Pctpl/Home/Public/images/pc/1490073308708.jpg',
                'author' => '木风和谷雨',
                'content' => '健康、淳朴、开朗、温柔、正能量，传达出枫叶谷热情的服务态度',
                'price' => 260
            ),
        );
        return $recommends;
    }

    public function aboutUS() {
        $info = array(
            'content' => '鸟布鲸 专注油画服务,为全世界提供种类繁多,性价比高的油画作品',
            'url' => 'home/page',
            'src' => '/Pctpl/Home/Public/images/pc/149007689617.jpg',
        );
        return $info;
    }

    public function news() {
        
    }

    public function partner() {
        $partners = array(
            array(
                'url' => 'http://www.fanhua.net.cn/',
                'src' => '/Pctpl/Home/Public/images/pc/1491471542571.png',
            ),
            array(
                'url' => 'http://www.hanbook.cn/',
                'src' => '/Pctpl/Home/Public/images/pc/1491471598822.png',
            ),
            array(
                'url' => 'http://www.bjsunmoon.com/',
                'src' => '/Pctpl/Home/Public/images/pc/1491471726615.png',
            ),
            array(
                'url' => 'http://www.chaoxianminyi.com/home.html',
                'src' => '/Pctpl/Home/Public/images/pc/1491471794980.png',
            ),
            array(
                'url' => 'http://www.szmatee.com/',
                'src' => '/Pctpl/Home/Public/images/pc/1491471808752.png',
            ),
            array(
                'url' => 'http://www.jitu.studio/',
                'src' => '/Pctpl/Home/Public/images/pc/1491471835861.png',
            ),
            array(
                'url' => 'http://www.tnyoo.com/',
                'src' => '/Pctpl/Home/Public/images/pc/1491471871985.png',
            ),
        );
        return $partners;
    }
}