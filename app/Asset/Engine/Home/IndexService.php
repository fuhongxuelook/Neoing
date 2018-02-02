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
                'path' => 'PcTpl/Home/Public/images/Index/20180114banner02.jpg',
                'url'  => 'market/jelly',
            ),
            array(
                'path' => 'PcTpl/Home/Public/images/Index/20180114banner01.jpg',
                'url'  => 'market/jelly',
            ),
            array(
                'path' => 'PcTpl/Home/Public/images/pc/1211banner04.jpg',
                'url'  => 'market/jelly',
            ),
            array(
                'path' => 'PcTpl/Home/Public/images/pc/1490685075590.jpg',
                'url'  => 'market/jelly',
            ),
            array(
                'path' => 'PcTpl/Home/Public/images/pc/1211banner01.jpg',
                'url'  => 'market/jelly',
            ),
            array(
                'path' => 'PcTpl/Home/Public/images/pc/1211banner03.jpg',
                'url'  => 'market/jelly',
            ),
        );
        return $themes;
    }
    
    public function category() {
        $category = array(
            array(
                'path' => '/PcTpl/Home/Public/images/pc/1490327989706.png',
                'name' => '鸟布鲸',
                'content' => 'Big World',
                'url'  => 'home/page',
            ),
            array(
                'path' => '/PcTpl/Home/Public/images/pc/1490326932783.png',
                'name' => '学院派',
                'content' => '绽放的艺术殿堂',
                'url'  => 'home/page',
            ),
            array(
                'path' => '/PcTpl/Home/Public/images/pc/1490323515250.png',
                'name' => '画风',
                'content' => '百家争鸣',
                'url'  => 'home/page',
            ),
            array(
                'path' => '/PcTpl/Home/Public/images/pc/1490325755542.png',
                'name' => '流浪的艺术',
                'content' => '流浪者的家',
                'url'  => 'home/page',
            ),
            array(
                'path' => '/PcTpl/Home/Public/images/pc/1490260622270.jpg',
                'name' => '异域风采',
                'content' => '多姿多彩',
                'url'  => 'home/page',
            ),
            array(
                'path' => '/PcTpl/Home/Public/images/pc/1490326477972.png',
                'name' => '拉丁美洲',
                'content' => '马孔多还在下雨',
                'url'  => 'home/page',
            ),
        );
        return $category;
       
    }

    public function recommend() {
        $recommends = array(
            array(
                'url' => 'market/jelly',
                'src' => '/PcTpl/Home/Public/images/pc/1490072433234.jpg',
                'author' => '陈建周',
                'content' => '梦想的世界，没有语言和声音一样绚丽多彩',
                'price' => 260
            ),
            array(
                'url' => 'market/jelly',
                'src' => '/PcTpl/Home/Public/images/pc/1490075211271.jpg',
                'author' => '小怪兽',
                'content' => '每个人心中都有一只小怪兽，从年幼到迟暮，和我们一起成长，一起对世界始终充满好奇心和热情。',
                'price' => 260
            ),
            array(
                'url' => 'market/jelly',
                'src' => '/PcTpl/Home/Public/images/pc/1490075444696.jpg',
                'author' => '少女猫咪',
                'content' => '不用担心，总有一天，你也会拥有一只你自己的猫',
                'price' => 260
            ),
            array(
                'url' => 'market/jelly',
                'src' => '/PcTpl/Home/Public/images/pc/1490072989607.jpg',
                'author' => '卷卷',
                'content' => '卷卷传递出的爱的讯息和“有爱就有幸福”的理念',
                'price' => 260
            ),
            array(
                'url' => 'market/jelly',
                'src' => '/PcTpl/Home/Public/images/pc/1490338321679.jpg',
                'author' => '欣小叶',
                'content' => '欣小叶是搜猎人原创，为贵州欣港湾休闲综合体定制',
                'price' => 260
            ),
            array(
                'url' => 'market/jelly',
                'src' => '/PcTpl/Home/Public/images/pc/1490073308708.jpg',
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
            'src' => '/PcTpl/Home/Public/images/pc/149007689617.jpg',
        );
        return $info;
    }

    public function news() {
        $news = array(
            array(
                'url' => 'http://www.kejixun.com/chuangye/170118/276125.shtml',
                'src' => 'PcTpl/Home/Public/images/pc/1490322118269.jpg',
                'content' => '以大众艺术品交易平台为依托，传递现代“猎人精神”',
                'date' => '2017-01-18',
            ),
            array(
                'url' => 'http://jb.sznews.com/html/2016-11/08/content_3656096.htm',
                'src' => 'PcTpl/Home/Public/images/pc/1490322763387.jpg',
                'content' => '金融新品集中亮相 文创产业首现金博会',
                'date' => '2017-01-18',
            ),
            array(
                'url' => 'http://collection.sina.com.cn/exhibit/zlxx/2016-09-27/doc-ifxwevmc5654434.shtml',
                'src' => 'PcTpl/Home/Public/images/pc/1490322673374.jpg',
                'content' => '首届国际学院版画联盟展亮相北京太庙艺术馆',
                'date' => '2017-01-18',
            ),
            array(
                'url' => 'http://www.artsbj.com/show-19-513225-1.html',
                'src' => 'PcTpl/Home/Public/images/pc/1490323393338.jpg',
                'content' => '王华祥版画展”开幕：展示王华祥走过的版画之路',
                'date' => '2017-01-18',
            ),
            array(
                'url' => 'http://www.cs.com.cn/ssgs/gssc/201603/t20160329_4935873.html',
                'src' => 'PcTpl/Home/Public/images/pc/1490323516121.jpg',
                'content' => '“维度”张显飞艺术展走进悦美术馆',
                'date' => '2017-01-18',
            ),
            array(
                'url' => 'http://www.takefoto.cn/viewnews-524124.html',
                'src' => 'PcTpl/Home/Public/images/pc/1490321730457.jpg',
                'content' => '遇见——搜猎人合作艺术家六人展',
                'date' => '2017-01-18',
            ),
        );
        return $news;
    }

    public function partner() {
        $partners = array(
            array(
                'url' => 'http://www.fanhua.net.cn/',
                'src' => '/PcTpl/Home/Public/images/pc/1491471542571.png',
            ),
            array(
                'url' => 'http://www.hanbook.cn/',
                'src' => '/PcTpl/Home/Public/images/pc/1491471598822.png',
            ),
            array(
                'url' => 'http://www.bjsunmoon.com/',
                'src' => '/PcTpl/Home/Public/images/pc/1491471726615.png',
            ),
            array(
                'url' => 'http://www.chaoxianminyi.com/home.html',
                'src' => '/PcTpl/Home/Public/images/pc/1491471794980.png',
            ),
            array(
                'url' => 'http://www.szmatee.com/',
                'src' => '/PcTpl/Home/Public/images/pc/1491471808752.png',
            ),
            array(
                'url' => 'http://www.jitu.studio/',
                'src' => '/PcTpl/Home/Public/images/pc/1491471835861.png',
            ),
            array(
                'url' => 'http://www.tnyoo.com/',
                'src' => '/PcTpl/Home/Public/images/pc/1491471871985.png',
            ),
        );
        return $partners;
    }

    public function placeholder() {
        return '抽象画';
    }
}