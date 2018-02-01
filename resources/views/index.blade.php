<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit|ie-comp|ie-stand" />
    <meta  name="keywords" content="鸟布鲸 我们的世界" />
    <title>鸟布鲸</title>

    <link rel="stylesheet" href="{{asset('PcTpl/Public/css/nav.css')}}">
    <link type="text/css" href="{{asset('PcTpl/Home/Public/css/pc/lib2.css')}}" rel="stylesheet"/>
    <link type="text/css" href="{{asset('PcTpl/Home/Public/css/pc/style.2041.css')}}" rel="stylesheet"/>
    <link type="text/css" href="{{asset('PcTpl/Home/Public/css/pc/bwhite.css')}}" rel="stylesheet"/>
    <link type="text/css" href="{{asset('PcTpl/Home/Public/css/pc/2323.css')}}" rel="stylesheet"/>
    <script type="text/javascript" src="{{asset('PcTpl/Home/Public/js/pc/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('PcTpl/Home/Public/js/pc/jquery.list.js')}}"></script>
    <script type="text/javascript" src="{{asset('PcTpl/Home/Public/js/pc/org.1494058893.js')}}" data-main="indexMain"></script>
    <style>
        .fixed{display: none}
         .pop_activity_div{
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 800080;
            background-color: rgba(0,0,0,0.5);
        }
        .pop_activity_div .pop_activity_img{
            position: fixed;
            width: 1000px;
            height: 700px;
            top:50%;
            left: 50%;
            margin-top: -350px;
            margin-left: -500px;
        }
        .pop_activity_div .pop_activity_flex{
            position: absolute;     bottom: 21px; display: flex;
            margin:0 auto ;
            text-align: justify;
            justify-content: center;
            width: 100%;
        }
        .pop_activity_div .pop_activity_flex div{
            text-align: center;
            width: 300px;
        }
        .pop_activity_div .pop_activity_flex div img{
            float: none;
        }
        .pop_activity_div .pop_activity_flex div p{
            color: #fff;
            font-size:16px;
            margin-top: -4px;
        }
        .pop_activity_div .pop_activity_flex div p span{
            font-size:24px;
            font-weight:bold;
        }
        .pop_activity_div .pop_activity_flex div .goumai_goods{
            background-color:#ffba00 ;
            color: #fff;
            border: 2px solid #e82dc9;
            display: block;
            width: 120px;
            margin: 30px auto;
            font-size: 16px;
            border-radius:17.5px ;
            line-height: 30px;
            height: 30px;
        }
    </style>
</head>
<body>

<header>

    <script type="text/javascript" src="{{asset('PcTpl/Public/js/reg.js')}}"></script>
    <script type="text/javascript" src="{{asset('PcTpl/Home/Public/js/lgandrg.js')}}"></script>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        #full_navigation {
        }
        header{
            max-width: 1000px;
            position: relative;
            /*background-color: #333333;*/
            background-color: #ffffff;
            min-width: 1000px;
            z-index: 999;
            margin: 0 auto;
            /*border-bottom: 1px solid #bababa;*/
        }
        #full_navigation .tabs {
            width: 580px;
            margin: 0 auto;
            position: fixed;
            background-color: #f5f5f1;
            padding-top: 20px;
            left: 50%;
            margin-left: -290px;
            z-index: 10990;
            top: 40%;
            margin-top: -280px;
        }

        #full_navigation .nav .nav-menu li .move .changeA {
            background-color: #ff873e;
            color: #FFFFFF;
        }

        #full_navigation .nav .nav-menu li a {
            text-align: left;
            display: block;
            padding-left: 14px;
            text-decoration: none;
        }

        .header_bar span a {
            font-size: 16px;
        }

        #full_navigation .ul1s {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
            align-items: center;
            margin-left: 51px;
        }

        #full_navigation .ul1s li {
            font-size: 13px;
            background-color: #f3f3f3;
            border: 1px #dddddc solid;
            width: 50px;
            height: 30px;
            text-align: center;
            line-height: 29px;
            cursor: pointer;
        }

        #full_navigation .ul1s li:nth-child(1) {
            border-right: none;
        }

        #full_navigation .ul1s li.active {
            background: #fff;
            border-bottom: none;
            height: 31px;
            color: #ff873e;
        }

        #full_navigation .tabs div {
            background-color: #fff;
        }

        #full_navigation .tabs .boxs > div {
            line-height: 28px;
            padding-top: 0px;
            z-index: -1;
            border-top: 1px #dddddc solid;
            display: none;
            margin-top: -1px;
        }

        #full_navigation .all_div {
            display: none;
            position: absolute;
            z-index: 100;
            text-align: center;
            margin: 0 auto;
            width: 100%;
            margin-top: -134px;
            height: 100%;
        }

        body .all_div .tabs .boxs {
            width: 100%;
            height: auto;
        }

        #full_navigation .all_div_bj {
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            z-index: 999;
            display: block;
            opacity: 0.8;
            background-color: rgb(221, 221, 221);
        }

        body #full_navigation .boxs input {

            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            font-family: inherit;
            width: 232px;
            line-height: 20px;
            color: #333;
            font-size: 12px;
            margin: 0 0 0.2em 0;
            padding: 6px;
            border: 1px solid #c2c2c2;
            border-right: 1px solid #e6e6e6;
            border-bottom: 1px solid #e6e6e6;
            display: block;
        }

        #full_navigation .register p {
            font-size: 12px;
            margin-top: 8px;
            margin-bottom: 4px;
        }

        #full_navigation .register {
            padding: 20px 53px;
            text-align: left;
        }

        #full_navigation .boxs .checkbox {
            width: 13px;
        }

        #full_navigation .boxs .register span {
            color: red;
            position: absolute;
            margin: -34px 0px 0px 256px;
            font-size: 12px;
        }

        #full_navigation .boxs .login span {
            color: red;
            position: absolute;
            margin: -34px 0px 0px 256px;
            font-size: 12px;
        }

        #full_navigation .boxs .register hr {
            background-color: #e1e1df;
            color: #e1e1df;
            border: 0;
            height: 1px;
            margin: 19px 0 11px;
            clear: both;
        }

        #full_navigation .register .submit-button {
            background-color: #3cb1cb;
            border-color: rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            border-radius: 3px;
            color: #fff;
            margin: 10px 0px;
        }

        #full_navigation .boxs .login span {
            font-size: 12px;
            color: red;
            position: absolute;
            margin: -34px 0px 0px 256px;
        }

        #full_navigation .login .submit-button {

            font-size: 14px;
            line-height: inherit;
            background-color: #3cb1cb;
            border-color: rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            border-radius: 3px;
            color: #fff;
            border: none;
            margin: 10px 0;
        }

        #full_navigation .login p {
            font-size: 12px;
            margin-top: 8px;
            margin-bottom: 4px;
        }

        #full_navigation .login {
            padding: 20px 53px;
            text-align: left;
        }

        #full_navigation .boxs .login hr {
            background-color: #e1e1df;
            color: #e1e1df;
            border: 0;
            height: 1px;
            margin: 19px 0 11px;
            clear: both;
        }

        #full_navigation #kd {
            width: 82px;
            position: absolute;
            height: 32px;
            border: 1px solid #dddddc;
            border-left: none;
            margin-top: -36px;
            margin-left: 150px;
        }

        #full_navigation #kds {
            width: 82px;
            position: absolute;
            height: 32px;
            border: 1px solid #dddddc;
            border-left: none;
            margin-top: -37px;
            margin-left: 150px;
        }

        #full_navigation img {
            vertical-align: middle;
        }

        #full_navigation .boxs #mobilecode {
            width: 150px;
        }

        #full_navigation #btnSendCode {
            width: 82px;
            height: 34px;
            font-size: 11px;
            background-color: #ff873e;
            color: #fff;
            margin-top: -37px;
            margin-left: 150px;
            display: -webkit-box;
            border: none;
        }

        #full_navigation .boxs .register .input_text {
            font-size: 12px;
            margin: -23px 22px 0px;
            color: #000;
        }

        #full_navigation .boxs .login .input_text {
            font-size: 12px;
            margin: -23px 22px 0px;
            color: #000;
        }

        #full_navigation #randCode {
            width: 150px;
        }

        #full_navigation .button-login {
            background-color: #34A8C4;
            width: 232px;
            margin-top: 10px;
            border: none;
            font-size: 14px;
            line-height: inherit;
            border-radius: 3px;
            color: #fff;
        }

        #full_navigation  .phone-button {
            background-color: #34A8C4;
            width: 232px;
            margin-top: 10px;
            border: none;
            font-size: 14px;
            line-height: inherit;
            border-radius:3px;
            color: #fff;
        }
        #full_navigation .submit-button {
            width: 232px;
            border-radius: 3px;
        }

        #full_navigation #randCode1 {
            width: 150px;
        }

        #full_navigation .lgs .kuaijie{
            margin-top: 10px;
            margin-bottom: 20px;
        }
        #full_navigation .lgs .kuaijie a{
            padding: 6px 22px;
            color: #fff;
            background-color: #34A8C4;
            border-radius: 3px;
        }
        .boxs a {
            color: #34A8C4;
            text-decoration: none;
            font-size: 12px;

        }

        .zhuces a {
            padding: 9px 16px;
            cursor: pointer;
        }

        #login {
            /*color: #b4b4b4;*/
            color: #7F7F7F;
        }

        #full_navigation .tabs .ul1s .close {
            font-size: 24px;
            float: right;
            background-color: #f5f5f1;
            cursor: pointer;
            margin-left: 383px;
            width: 31px;
            height: 31px;
            line-height: 31px;
            color: #666;
        }
        .weChats{
            width: 100%; height: auto ;display: none;    margin: 0 auto;text-align: center;
        }
        body #full_navigation .boxs .shoujidls input,body #full_navigation .boxs .mingzidls input{
            margin: 22px 0px;
        }
        #full_navigation #btnSendCodes{
            width: 82px;
            height: 34px;
            font-size: 11px;
            background-color: #ff873e;
            color: #fff;
            margin-top: -36px;
            margin-left: 150px;    display: -webkit-box;
            border: none;
        }

    </style>

    <div class="content clearfix">
        <br>
        <div class='logo'>
            <a href="/home/page"><img src="{{asset('PcTpl/Public/images/logo_n.png')}}" alt="logo"></a>
        </div>
        <!--ul id="menu" class="menu">
            <li data-menuanchor="page1" class="menu_li active">
                <a href="/Home/index/index.html">首页</a>
            </li>
            <li data-menuanchor="page2" class="menu_li">
                <a href="/Home/Service/copyright.html">版权</a>

            </li>
            <li data-menuanchor="page3" class="menu_li">
                <a href="/Home/Service/cases.html">IP展示</a>
            </li>
            <li data-menuanchor="page4" class="menu_li">
                <a href="/Home/Service/authorization.html">IP授权</a>

            </li>
            <li data-menuanchor="page5" class="menu_li">
                <a href="/Home/Service/make.html">IP订制</a>
            </li>
            <li data-menuanchor="page6" class="menu_li">
                <a href="#">IP产业化</a>
                <ul class="sub_menu">
                    <li>
                        <div class="sub-con">
                            <a href="/Home/Service/clouds.html">云朵童画</a>
                            <a href="/Home/Service/clouds.html">云朵童画</a>
                        </div>
                    </li>
                    <li>
                        <div class="sub-con">
                            <a href="/Home/Service/develop.html">衍生品开发</a>
                            <a href="/Home/Service/develop.html">衍生品开发</a>
                        </div>
                    </li>
                </ul>
            </li>

            <li data-menuanchor="page7" class="menu_li">
                <a href="#">造客</a>
                <ul class="sub_menu">
                    <li>
                        <div class="sub-con">
                            <a href="/Home/Article/ArticleList.html">原创故事</a>
                            <a href="/Home/Article/ArticleList.html">原创故事</a>
                        </div>
                    </li>
                    <li>
                        <div class="sub-con">
                            <a href="/Home/Service/activity.html">精品活动</a>
                            <a href="/Home/Service/activity.html">精品活动</a>
                        </div>
                    </li>
                    <li>
                        <div class="sub-con">
                            <a href="/Home/Service/media.html">媒体报道</a>
                            <a href="/Home/Service/media.html">媒体报道</a>
                        </div>
                    </li>
                </ul>
            </li>
            <li data-menuanchor="page8" class="menu_li">
                <a href="#">关于</a>
                <ul class="sub_menu">
                    <li>
                        <div class="sub-con">
                            <a href="/Home/Service/hunterCollection.html">猎人集锦</a>
                            <a href="/Home/Service/hunterCollection.html">猎人集锦</a>
                        </div>
                    </li>
                    <li>
                        <div class="sub-con">
                            <a href="/Home/Service/seek.html">寻找原创者</a>
                            <a href="/Home/Service/seek.html">寻找原创者</a>
                        </div>
                    </li>
                    <li>
                        <div class="sub-con">
                            <a href="/Home/Service/cooperation.html">关于我们</a>
                            <a href="/Home/Service/cooperation.html">关于我们</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul-->

        <div class="nav-right">
            <div class="zhuces">
                <input style="border:3px solid #C4C4C4;width: 200px;height:32px;font-size:15px;border-radius:15px" placeholder="{{$placeholder}}">
                <span><a class="searchBtn" href="" target="_blank">🔍</a></span> 
            </div>
            <div class="goLogin"><a id="login" style="color:white;">登陆</a></div>
            <input style="display: none" value="" id="session">   
        </div>
    </div>
    <div id="full_navigation">
        <div class="mark_bg"></div>

        <div class="all_div">
            <div class="all_div_bj"></div>
            <div class="tabs">
                <ul class="ul1s">
                    <li class="rg active">注册</li>
                    <li class="lg">登录</li>
                    <div  class="close">×</div>
                </ul>
                <div class="boxs">
                    <div style="width: 100%; height: auto" class="rgs box1">
                        <form class="register sms-form" id="sms-form" method="post"  name="form-sub">
                            <p>手机号码</p>
                            <input type="text" id="phone" name="username"  class="phone" maxlength="11" placeholder="11位手机号码" >
                            <span class="phone_span"></span>
                            <p>验证码</p>
                            <input  type="text" id="randCode" name="randCode" maxlength="4" placeholder="图片验证码"  >
                            <div class="kd">
                                <img src="/Home/Mobile/createCode" id="kd"
                                     onclick="this.src='/Home/Mobile/createCode/id/'+Math.random()">
                            </div>
                            <span class="randCode_span"></span>
                            <p>手机验证码</p>
                            <input type="text" id="mobilecode" name="mobilecode" class="input-sty padding-r" maxlength="6" placeholder="手机验证码" >
                            <button id="btnSendCode" class="phoneCode" type="submit">发送验证码</button>

                            <span class="mobilecode_span"></span>
                            <p>密码</p>
                            <input  type="password" name="pwd" class="pwd" id="password" maxlength="16"  placeholder="6-16位字符，须包含字母、数字" >
                            <span class="password_span"></span>
                            <p>确认密码</p>
                            <input  type="password" name="rpwd" class="rpwd" id="rpassword" maxlength="16" placeholder="确认密码" >
                            <span class="rpassword_span"></span>
                            <hr/>
                            <div>
                                <input type="checkbox" class="checkbox" checked="checked"  /><span class="input_text">请确认已阅读并同意鸟布鲸<a href="/Home/Index/use_clause.html " target="_black">使用条款</a>和<a href="/Home/Index/privacy_clause.html" target="_black" >隐私条款</a></span>
                            </div>
                            <button type="button" class=" button-login registerBtn" >立即注册</button><span class="zhuce_span"style=" margin: 8px 30px;"></span>
                        </form>
                    </div>
                    <div style="width: 100%; height: auto" class="lgs box1">
                        <div  class="login">
                            <div class="kuaijie">
                                <a href="javascript:;" class="mingzidl" style="background-color:#189ce0">用户名</a>
                                <a href="javascript:;" class="shoujidl">手机号</a>
                                <!--a href="javascript:;" class="weixindl">微信</a-->
                            </div>
                            <hr style=" margin-top: 5px;margin-bottom: 0px;"/>
                            <!--用户名登录-->
                            <div class="mingzidls">
                                <input type="text" id="username" name="username"  class="phone" placeholder="用户名" >
                                <span class="phone1_span" style="margin-top: -53px;"></span>
                                <input type="password"  name="pwd"  class="password" id="password1"  maxlength="16"  placeholder="密码" >
                                <span class="password1_span" style="margin-top: -53px;"></span>
                                <hr />
                                <div>
                                    <a href="/Home/Password/index.html">忘记密码了吗？</a>
                                </div>
                                <button type="button" value="登录" class="submit-button"  >登录</button>
                            </div>
                            <!--手机号码登录-->
                            <div class="shoujidls" style="display: none">
                                <form class=" sms-forms" id="sms-forms" method="post"  name="form-sub">
                                    <input type="text" id="usernames" name="username"  class="username" maxlength="11" placeholder="手机号码" >
                                    <span class="phone1_span" style="margin-top: -53px;"></span>
                                    <input type="text" id="mobilecodes" name="mobilecode" class="input-sty padding-r" maxlength="6" placeholder="验证码" >
                                    <button id="btnSendCodes" class="phoneCode" type="submit" style="margin-top: -56px;">发送验证码</button>
                                    <span class="mobilecodes_span"></span>
                                    <hr />
                                    <div>
                                        <a href="/Home/Password/index.html">忘记密码了吗？</a>
                                    </div>
                                    <button type="button" value="登录" class="phone-button"  onclick="">登录</button>
                                </form>
                            </div>
                            <!--微信内嵌登录-->
                            <div class="weChats box1" >
                                <div id="weChat"></div>
                                <script src="http://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js"></script>
                                <script>
                                    var obj = new WxLogin({
                                        id:"weChat",
                                        appid: "wx8d8646fc4b1dcca4",
                                        scope: "snsapi_login",
                                        redirect_uri: "http%3A%2F%2Fwww.soulieren.com%2Findex.php%2Fhome%2FThirdLogin%2Fcallback",
                                        state: "",
                                        style: "black",
                                        href: ""
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</header>

<script>
    $(function () {
        $('.sub_menu li').mouseenter(function () {
            $(this).find('.sub-con').stop().animate({'top': 0}, 500, 'linear');
        }).mouseleave(function () {
            $(this).find('.sub-con').stop().animate({'top': -53}, 500, 'linear');
        })
    })
</script>

<div id="sitecontent" class="ff_sitecontent">
    <div id="indexPage" class="ff_indexPage"  data-scroll-speed="1" data-control="0"
         data-control-wheel="0" data-singlescreen="0">
        <div id="topSlider" class="ff_topSlider mslider module">
            <div class="content_wrapper">
                <div class="content_list owl-carousel owl-theme" data-slider-height="500" data-slider-auto="1"
                     data-slider-mode="3" data-slider-pause="5"  data-slider-speed="1"
                     style="height:500px">
                    @foreach($themes as $theme)
                        <div class="item_block">
                        <div class="item_bg image"
                             style="background-image:url({{$theme['path']}})"><a href="{{$theme['url']}}" target="_parent"></a></div>
                        </div>
                    @endforeach
                </div>
                <div class="sliderArrow">
                    <div></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!--div class="mlist service_tabs module ff_noSlider" style=" ">
            <div class="bgmask"></div>
            <div class="module_container wide">
                <div class="container_header wow">
                    <p class="title">我们的世界</p>
                    <p class="subtitle">/ NEO</p>
                </div>
                <div class="container_category wow movedx one" data-movedx-mid="2" data-movedx-distance="15">
                    <a href="javascript:volid(0);" class="active"><span>全部</span></a>
                </div>
                <div class="container_content">
                    <div class="content_wrapper">
                        <div class="tab_content_wrapper">
                            <div class="tab_content">
                                <div class="tab_indexs">
                                    <div class="fnums nums_item" data-current="0">
                                        <div><span>0</span><span>1</span><span>2</span></div>
                                    </div>
                                    <div class="tnums nums_item">
                                        <div>
                                            <span>0</span><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>6</span><span>7</span>
                                        </div>
                                    </div>
                                    <div class="nums_item">
                                        <div><span> /</span></div>
                                    </div>
                                </div>
                                <div class="sliderWrapper" data-slider-num="1">
                                    <div class="content_list">
                                        <div id="service_postitem_0" class="item_block">
                                            <div class="item_wrapper">
                                                <div class="item_info"><p class="title ellipsis">鸟布鲸&nbsp;</p>
                                                    <p class="subtitle ellipsis">Neoing </p>
                                                    <div class="description">
                                                        <p>
                                                            至今为止由搜猎人或以搜猎人合作的艺术家作品制作的IP形象一览，致力于打造中国人自己的IP。
                                                        </p>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="service_postitem_1" class="item_block">
                                            <div class="item_wrapper">
                                                <div class="item_info"><p class="title ellipsis">IP&nbsp;授权</p>
                                                    <p class="subtitle ellipsis">Authorization</p>
                                                    <div class="description">
                                                        <p>
                                                            由原创者提供IP，搜猎人与其合作细节洽谈、签订合同。保证原创IP的宣传力度，为原创者及原创IP保驾护航。
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="service_postitem_2" class="item_block">
                                            <div class="item_wrapper">
                                                <div class="item_info"><p class="title ellipsis">IP&nbsp;定制</p>
                                                    <p class="subtitle ellipsis">Customization</p>
                                                    <div class="description">
                                                        <p>
                                                            搜猎人为主题商业提供产业IP定制开发及授权的 “视觉IP一站式服务”：介绍IP用途，明确IP意向，品类选择等。
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="service_postitem_3" class="item_block">
                                            <div class="item_wrapper">
                                                <div class="item_info"><p class="title ellipsis">IP&nbsp;产业化</p>
                                                    <p class="subtitle ellipsis"> Industrialization</p>
                                                    <div class="description">
                                                        <p>
                                                            搜猎人将目光放在IP文化&品牌文化相结合的方式，带动线上线下人流，增加商户互动。在产品设计，除IP标准手册外，未来还将打造插画漫画及数字动画等。
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="service_postitem_4" class="item_block">
                                            <div class="item_wrapper">
                                                <div class="item_info"><p class="title ellipsis">版权</p>
                                                    <p class="subtitle ellipsis">Copyright</p>
                                                    <div class="description">
                                                        <p>
                                                            版权（copyright）即著作权，是指文学、艺术、科学作品的作者对其作品享有的权利。版权是知识产权的一种类型，搜猎人将致力于维护保护造客这种知识产权。
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="service_postitem_5" class="item_block">
                                            <div class="item_wrapper">
                                                <div class="item_info"><p class="title ellipsis">造客</p>
                                                    <p class="subtitle ellipsis">Maker</p>
                                                    <div class="description">
                                                        <p>
                                                            搜猎人是具备平台整合优势、强大的项目资源及专业团队，为合作方打造文化、艺术、原创、时尚生活以及品牌文化输出等主体性的视觉IP服务商。
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab_button">
                            <div class="content_list">
                                <div id="service_item_0" class="item_block wow" style="animation-delay:.0s">
                                    <a href="www.baidu.com" class="item_link">
                                        <div class="item_wrapper">
                                            <div class="item_img"><img src="/Pctpl/Home/Public/images/pc/1490077085525.png"/></div>
                                            <div class="item_info">
                                                <p class="nums">class</p>
                                                <p class="title ellipsis">鸟&nbsp;布鲸</p>
                                                <p class="subtitle ellipsis">Neoing</p></div>
                                        </div>
                                    </a>
                                </div>
                                <div id="service_item_1" class="item_block wow" style="animation-delay:.1s">
                                    <a href="www.baidu.com" class="item_link">
                                        <div class="item_wrapper">
                                            <div class="item_img"><img src="/Pctpl/Home/Public/images/pc/1490075922783.png"/></div>
                                            <div class="item_info"><p class="nums">02 /</p>
                                                <p class="title ellipsis">IP&nbsp;授权</p>
                                                <p class="subtitle ellipsis"> Authorization</p></div>
                                        </div>
                                    </a>
                                </div>
                                <div id="service_item_2" class="item_block wow" style="animation-delay:.2s">
                                    <a href="www.baidu.com" class="item_link">
                                        <div class="item_wrapper">
                                            <div class="item_img"><img src="/Pctpl/Home/Public/images/pc/1490076036776.png"/></div>
                                            <div class="item_info"><p class="nums">03 /</p>
                                                <p class="title ellipsis">IP&nbsp;定制</p>
                                                <p class="subtitle ellipsis">Customization</p></div>
                                        </div>
                                    </a>
                                </div>
                                <div id="service_item_3" class="item_block wow" style="animation-delay:.3s">
                                    <a  href="www.baidu.com" class="item_link">
                                        <div class="item_wrapper">
                                            <div class="item_img"><img src="/Pctpl/Home/Public/images/pc/1490076244647.png"/></div>
                                            <div class="item_info"><p class="nums">04 /</p>
                                                <p class="title ellipsis">IP&nbsp;产业化</p>
                                                <p class="subtitle ellipsis">Industrialization</p></div>
                                        </div>
                                    </a>
                                </div>
                                <div id="service_item_4" class="item_block wow" style="animation-delay:.0s">
                                    <a href="www.baidu.com" class="item_link">
                                        <div class="item_wrapper">
                                            <div class="item_img"><img src="/Pctpl/Home/Public/images/pc/1490076286323.png"/></div>
                                            <div class="item_info"><p class="nums">05 /</p>
                                                <p class="title ellipsis">版权</p>
                                                <p class="subtitle ellipsis">Copyright</p></div>
                                        </div>
                                    </a>
                                </div>
                                <div id="service_item_5" class="item_block wow" style="animation-delay:.1s">
                                    <a href="www.baidu.com" class="item_link">
                                        <div class="item_wrapper">
                                            <div class="item_img"><img src="/Pctpl/Home/Public/images/pc/1490076330843.png"/></div>
                                            <div class="item_info"><p class="nums">06 /</p>
                                                <p class="title ellipsis">造客</p>
                                                <p class="subtitle ellipsis">Maker</p></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div-->
        <div class="mlist team module ff_slider" style=" ">
            <div class="bgmask"></div>
            <div class="module_container">
                <div class="container_header wow">
                    <p class="title">分类</p>
                    <p class="subtitle"> / CateGory</p>
                </div>
                <div class="container_category wow movedx one" data-movedx-mid="2" data-movedx-distance="15">
                    <a href="javascript:volid(0);" class="active"><span>全部</span></a>
                </div>
                <div class="container_content">
                    <div class="content_wrapper slider" data-slider-num='{"0":{"nav":0,"items":2},"1180":{"items":4}}'
                         data-slider-loop="1">
                        <div class="content_list">
                            @foreach($category as $ca)
                            <div id="project_item_0" class="item_block wow" style="animation-delay:.0s">
                                <a href="{{$ca['url']}}" class="item_link" target="_parent">
                                    <div class="item_img"><img src="{{$ca['path']}}"/>
                                        <div class="rectborder"></div>
                                        <i class="icon iconfont icon-add"></i></div>
                                    <!--div class="item_wrapper">
                                        <div class="item_info"><p class="title ellipsis">鸟 布鲸</p>
                                            <p class="subtitle">我们的世界</p></div>
                                    </div-->
                                </a></div>
                            @endforeach
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="mlist project module ff_noSlider" style=" ">
            <div class="bgmask"></div>
            <div class="module_container wide">
                <div class="container_header wow">
                    <p class="title">推荐</p>
                    <p class="subtitle"> / PROJECT</p>
                </div>

                <div class="container_content">
                    <div class="content_wrapper">
                        <div class="content_list movedx" data-movedx-mid="2" data-movedx-distance="15">
                            @foreach($recommends as $recommend)
                            <a  href="{{$recommend['url']}}"  target="_parent">
                                <div class="item_block wow" style="animation-delay:.2s">
                                    <img src="{{$recommend['src']}}"/>
                                    <div class="item_wrapper">
                                        <div class="item_info move"><p class="title ellipsis">{{$recommend['author']}}</p>
                                            <p class="subtitle ellipsis">{{$recommend['content']}}</p></div>
                                        <i class="icon iconfont icon-add"></i>
                                    </div>
                                </div>
                            </a>
                            @endforeach

                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="mcustomize module horizontal tril" style="">

            <div class="bgmask"></div>
            <div class="module_container">
                <div class="container_content">
                    <div class="contentbody">
                        <div class="wrapper">
                            <div class="header wow">
                                <p class="title">关于我们</p>
                                <p class="subtitle">ABOUT US</p>
                            </div>
                            <div class="description wow">
                                <p style="text-align: center;">
                                    <span style="font-size: 14px;">
                                        {{$info['content']}}
                                    </span>
                                </p>
                                <p><span style="font-size: 14px;"><br/></span></p>
                                <p style="text-align: center;">
                                    <a class="more" href="{{$info['url']}}" target="_blank">MORE</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mediabody wow">
                        <a target="_popup">
                            <div class="image" style="background-image:url({{$info['src']}})"></div>
                            <div class="mask"></div>
                            <div class="link_icon"><i class="fa fa-link" aria-hidden="true"></i></div>
                        </a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        
        <div class="mlist news module ff_noSlider" style=" ">
            <div class="bgmask"></div>
            <div class="module_container">
                <div class="container_header wow">
                    <p class="title">新闻</p>
                    <p class="subtitle"> / NEWS</p>
                </div>
                <div class="container_content">
                    <div class="content_wrapper">
                        <div class="content_list">
                            @foreach($news as $key => $new) 
                            <div id="{{'news_item_'.$key}}" class="item_block wow first" style="animation-delay:.0s">
                                <a  href="{{$new['url']}}" class="item_img" target="_blank">
                                    <img src="{{asset($new['src'])}}"/>
                                    <div class="rectborder"></div>
                                    <i class="icon iconfont "></i>
                                </a>
                                <div class="item_wrapper">
                                    <div class="item_info">
                                        <a href="{{$new['url']}}" target="_blank">
                                            <p class="title">{{$new['content']}}</p>
                                        </a>
                                        <p class="subtitle ellipsis">{{$new['date']}}</p>
                                    </div>
                                    <div class="item_tags"><i class="fa fa-tags"></i></div>
                                </div>
                            </div>
                            @endforeach
                            <!--div id="news_item_1" class="item_block wow" style="animation-delay:.1s">
                                <a  href="http://jb.sznews.com/html/2016-11/08/content_3656096.htm" class="item_img" target="_blank">
                                    <img src="/PcTpl/Home/Public/images/pc/1490322763387.jpg"/>
                                    <div class="rectborder"></div>
                                    <i class="icon iconfont icon-add"></i>
                                </a>
                                <div class="item_wrapper">
                                    <div class="item_info">
                                        <a  href="http://jb.sznews.com/html/2016-11/08/content_3656096.htm" target="_blank">
                                            <p class="title"> 金融新品集中亮相 文创产业首现金博会</p>
                                        </a>
                                        <p class="subtitle ellipsis">2016-11-08</p>
                                    </div>
                                    <div class="item_tags"><i class="fa fa-tags"></i></div>
                                    <a href="http://jb.sznews.com/html/2016-11/08/content_3656096.htm" target="_blank" class="more">MORE <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div id="news_item_2" class="item_block wow" style="animation-delay:.0s">
                                <a href="http://collection.sina.com.cn/exhibit/zlxx/2016-09-27/doc-ifxwevmc5654434.shtml" class="item_img" target="_blank">
                                    <img src="/PcTpl/Home/Public/images/pc/1490322673374.jpg"/>
                                    <div class="rectborder"></div>
                                    <i class="icon iconfont icon-add"></i>
                                </a>
                                <div class="item_wrapper">
                                    <div class="item_info">
                                        <a href="http://collection.sina.com.cn/exhibit/zlxx/2016-09-27/doc-ifxwevmc5654434.shtml"  target="_blank">
                                            <p class="title">首届国际学院版画联盟展亮相北京太庙艺术馆</p>
                                        </a>
                                        <p class="subtitle ellipsis">2016-09-27</p>
                                    </div>
                                    <div class="item_tags"><i class="fa fa-tags"></i> </div>
                                    <a href="http://collection.sina.com.cn/exhibit/zlxx/2016-09-27/doc-ifxwevmc5654434.shtml" target="_blank" class="more">MORE <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div id="news_item_3" class="item_block wow" style="animation-delay:.1s">
                                <a  href="http://www.artsbj.com/show-19-513225-1.html" class="item_img"  target="_blank">
                                    <img src="/PcTpl/Home/Public/images/pc/1490323393338.jpg"/>
                                    <div class="rectborder"></div>
                                    <i class="icon iconfont icon-add"></i>
                                </a>
                                <div class="item_wrapper">
                                    <div class="item_info">
                                        <a href="http://www.artsbj.com/show-19-513225-1.html" target="_blank">
                                            <p class="title">“王华祥版画展”开幕：展示王华祥走过的版画之路  </p>
                                        </a>
                                        <p class="subtitle ellipsis">2016-04-12</p>
                                    </div>
                                    <div class="item_tags"><i class="fa fa-tags"></i> </div>
                                    <a href="http://www.artsbj.com/show-19-513225-1.html" target="_blank" class="more">MORE <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div id="news_item_4" class="item_block wow" style="animation-delay:.0s">
                                <a  href="http://www.cs.com.cn/ssgs/gssc/201603/t20160329_4935873.html" class="item_img"  target="_blank">
                                    <img src="/PcTpl/Home/Public/images/pc/1490323516121.jpg"/>
                                    <div class="rectborder"></div>
                                    <i class="icon iconfont icon-add"></i>
                                </a>
                                <div class="item_wrapper">
                                    <div class="item_info">
                                        <a  href="http://www.cs.com.cn/ssgs/gssc/201603/t20160329_4935873.html" target="_blank">
                                            <p class="title">“维度”张显飞艺术展走进悦美术馆 </p>
                                        </a>
                                        <p class="subtitle ellipsis">2016-03-29</p>
                                    </div>
                                    <div class="item_tags"><i class="fa fa-tags"></i> </div>
                                    <a href="http://www.cs.com.cn/ssgs/gssc/201603/t20160329_4935873.html" target="_blank" class="more">MORE <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div id="news_item_5" class="item_block wow" style="animation-delay:.1s">
                                <a  href="http://www.takefoto.cn/viewnews-524124.html" class="item_img" target="_blank">
                                    <img src="/PcTpl/Home/Public/images/pc/1490321730457.jpg"/>
                                    <div class="rectborder"></div>
                                    <i class="icon iconfont icon-add"></i>
                                </a>
                                <div class="item_wrapper">
                                    <div class="item_info">
                                        <a  href="http://www.takefoto.cn/viewnews-524124.html" target="_blank">
                                            <p class="title">遇见——搜猎人合作艺术家六人展 </p>
                                        </a>
                                        <p class="subtitle ellipsis">2015-09-01</p>
                                    </div>
                                    <div class="item_tags"><i class="fa fa-tags"></i> </div>
                                    <a href="http://www.takefoto.cn/viewnews-524124.html" target="_blank" class="more">MORE <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div-->
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="mlist imagelink module ff_noSlider" style=" ">
            <div class="bgmask"></div>
            <div class="module_container">
                <div class="container_header wow">
                    <p class="title">合作伙伴</p>
                    <p class="subtitle"> / PARTNER</p>
                </div>
                <div class="container_category wow movedx one" data-movedx-mid="2" data-movedx-distance="15"><a
                        href="http://mo005-2323.mo5.line1.uemo.net/list/id/18886/" class="active"><span>全部</span></a>
                </div>
                <div class="container_content">
                    <div class="content_wrapper">
                        <ul class="content_list">
                            @foreach($partners as $key => $partner)
                            <li id="{{'item_block_'.$key}}" class="item_block wow" style="animation-delay:.0s">
                                <a class="item_img" href="{{$partner['url']}}" target="_blank">
                                    <img src="{{$partner['src']}}"/>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!--div id="mcontact" class="mcontact module" style=" ">
            <div class="module_container">
                <div class="container_header wow">
                    <p class="title">联系</p>
                    <p class="subtitle">/ CONTACT</p>
                </div>
                <div class="container_content">
                    <div class="content_wrapper">
                        <div id="contactlist" class="contactlist">
                            <div id="contactinfo" class="contactinfo wow">
                                <h3 class="ellipsis contact_name">北京搜猎人电子商务有限公司</h3>
                                <p class="ellipsis contact_add">地址：北京市朝阳区798艺术区陶瓷二街三木国际</p>
                                <p class="ellipsis contact_zip">邮编：100000</p>
                                <p class="ellipsis contact_tel">电话：010-57794643</p>
                                <p class="ellipsis contact_eml">邮箱：soulieren@163.com</p>
                                <div class="ff_social"><a class="fl" target="_blank" href="javascript:volid(0);"><i
                                        class="fa fa-weibo"></i></a><a class="fl" target="_blank"
                                                                       href="javascript:volid(0);"><i
                                        class="fa fa-qq"></i></a> <a id="mpbtn" class="fl" target="_blank"
                                                                     href="javascript:volid(0);"><i
                                        class="fa fa-weixin"></i></a></div>
                            </div>
                            <div id="contactform" class="contactform wow">

                                    <p class="contactform_name">
                                        <input type="text" class="inputtxt names" name="names" placeholder="姓名"
                                               autocomplete="off"/>
                                    </p>
                                    <p class="contactform_eml">
                                        <input type="text" class="inputtxt email_address" name="email_address" placeholder="邮箱"
                                               autocomplete="off"/>
                                    </p>
                                    <p class="contactform_tel">
                                        <input type="text" class="inputtxt phone_numder" name="phone_numder" placeholder="电话"
                                               autocomplete="off"/>
                                    </p>
                                    <p class="contactform_content">
                                        <textarea class="inputtxt text" name="text" placeholder="内容"
                                                  autocomplete="off"></textarea>
                                    </p>
                                    <p class="contactform_submit">
                                        <input class="inputtxt submit" type="submit" value="提交"/>
                                    </p>

                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div-->
    </div>
</div>
<div id="footer">
    <p>
        <span class="ellipsis">版权所有 京ICP备15012603号——1</span>
    </p>
</div>


<script type="text/javascript">
  $('.closes_div_goods').click(function () {
        $('.pop_activity_div').hide();
    });
$('.submit').click(function () {
   if($('.names').val()==''){
    alert('名称不能为空');
    $('.names').focus();
   }else if($('.email_address').val()==''){
       alert('邮箱不能为空');
       $('.email_address').focus();
   }else if($('.phone_numder').val()==''){
       alert('手机不能为空');
       $('.phone_numder').focus();
   }else if($('.text').val()==''){
       alert('内容不能为空');
       $('.text').focus();
   }else{
       var host = location.host;
       var user={
           names:$('.names').val(),
           email_address:$('.email_address').val(),
           phone_number:$('.phone_numder').val(),
           text:$('.text').val()
       };
       $.ajax({
           type: "POST",
           url: "http://" + host + "/Home/index/contact",
           data: user,
           dataType: 'json',
           success: function (data) {
               console.log(data);
               if(data.status == -10086){
                   alert(data.msg);
               }
               if(data.status == -1){
                   alert(data.msg);
               }
               if(data.status == 1){
                   alert('提交成功');
                   location.reload();
               }

           }
       })
   }
});
if(/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))){
    if(window.location.href.indexOf("?mobile")<0){
        try{
            if(/Android|iPhone/i.test(navigator.userAgent)){
                window.location.href='http://m.soulieren.com';
            }else if(/mac/iPad/i.test(navigator.userAgent)){
                window.location.href='http://www.soulieren.com';
            }else{

            }
        }catch(e){}
    }
}
</script>
</body>
</html>
