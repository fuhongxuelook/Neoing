/**
 * Created by Administrator on 2017/4/24.
 */
$(document).ready(function() {
    var host = location.host;
    //登录注册切换
    $('.boxs .box1 ').eq(0).show();
    $('.ul1s li').click(function () {
        var index = $(this).index();
        $(this).addClass('active').siblings().removeClass('active');
        $('.boxs .box1 ').eq(index).show().siblings().hide();
    });
    $('#register').click(function () {

        $('.all_div').fadeIn();
    });
    $('.all_div_bj').click(function () {
        $('#kds').click();
        $('.all_div').fadeOut();
    });
    $('.close').click(function () {
        $('.all_div').fadeOut();
    });
    $('#login').click(function () {
        alert('暂时无法登陆');
        return false;
        $('.all_div').fadeIn();
        $('.lg').addClass('active');
        $('.rg').removeClass('active');
        $('.rgs').hide();
        $('.lgs').show();
    });
    $('#search').click(function() {
        alert('暂时不支持查询操作');
        return false;
    });
    $('.nav-menu>li').mouseenter(function () {
        $(this).find('.move').stop().animate({top:0},400);
    }).mouseleave(function () {
        $(this).find('.move').stop().animate({top:-44+'px'},400);
    });

    //手机，用户名，微信登录切换
    $('.mingzidl').click(function () {
        $('.mingzidl').css('background-color','#189ce0');
        $('.shoujidl').css('background-color','#34A8C4');
        $('.weixindl').css('background-color','#34A8C4');
        $('.mingzidls').show();
        $('.shoujidls').hide();
        $('.weChats').hide();
    });
    $('.shoujidl').click(function () {
        $('.mingzidl').css('background-color','#34A8C4');
        $('.shoujidl').css('background-color','#189ce0');
        $('.weixindl').css('background-color','#34A8C4');
        $('.mingzidls').hide();
        $('.shoujidls').show();
        $('.weChats').hide();
    });
    $('.weixindl').click(function () {
        $('.shoujidl').css('background-color','#34A8C4');
        $('.mingzidl').css('background-color','#34A8C4');
        $('.weixindl').css('background-color','#189ce0');
        $('.mingzidls').hide();
        $('.shoujidls').hide();
        $('.weChats').show();
    });
    //注册ajax
    $(".button-login").click(function () {
        var user = {
            username: $("#phone").val(),
            randCode:$("#randCode").val(),
            mobileCode:$("#mobilecode").val(),
            pwd: $("#password").val(),
            rpwd: $("#rpassword").val(),
        };
        $.ajax({
            type: "POST",
            url: "http://" + host + "/Home/Mobile/post",
            data: user,
            dataType: 'json',
            success: function (data) {

                if(data.status == -1){
                    $('.phone_span').html(data.msg);
                    return false;
                }
                if(data.status == -1){
                    alert(data.msg);
                    return false;
                }
                if(data.status == -2){
                    $('.mobilecode_span').html(data.msg);
                    return false;
                }
                if(data.status == -3){
                    alert(data.msg);
                    return false;
                }
                if(data.status == -4){
                    alert(data.msg);
                    $('.password_span').html(data.msg);

                    return false;
                }
                if(data.status == -5){
                    $('.rpassword_span').html(data.msg);
                    return false;
                }
                if(data.status == -5){
                    $('.rpassword_span').html(data.msg);
                    return false;
                }
                else {
                    $('.zhuce_span').html("注册成功，请您登录账号");
                    location.replace();
                    return true;
                }

            }
        })
    });
    //登录ajax
    var session = $('#session').val();
    if(session==''){

    }else {
        $('#full_navigation .all_div').empty();
    }
    $('.submit-button').click(function () {
        $(".submit-button").attr({"disabled":"disabled"});
        $(".submit-button").css('background-color','#dddddc');
        var user = {
            username: $("#username").val(),
            pwd: $("#password1").val(),
        };
        $.ajax({
            type: "POST",
            url: "http://" + host + "/Home/customer/login",
            data: user,
            dataType: 'json',
            success: function (data) {
                if (data.status == -1) {
                    $(".phone1_span").html(data.msg);
                    $(".submit-button").removeAttr("disabled");
                    $(".submit-button").css('background-color','#3cb1cb');
                    return false;
                }
                if (data.status == -2) {
                    $(".password1_span").html(data.msg);
                    $(".submit-button").removeAttr("disabled");
                    $(".submit-button").css('background-color','#3cb1cb');
                    return false;
                }
                if(data.status==5){
                    $(".submit-button").removeAttr("disabled");
                    $(".submit-button").css('background-color','#3cb1cb');
                    window.location.href=data.url;
                } else {
                    location.reload(true);
                    $(".submit-button").removeAttr("disabled");
                    $(".submit-button").css('background-color','#3cb1cb');
                    return true;
                }
            }
        });
    });
    //手机号登录
    $('.phone-button').click(function () {
        $(".phone-button").attr({"disabled":"disabled"});
        $(".phone-button").css('background-color','#dddddc');
        var user = {
            username: $("#usernames").val(),
            mobilecode: $("#mobilecodes").val(),
        };
        $.ajax({
            type: "POST",
            url: "http://" + host + "/Home/Mobile/thirdLogin",
            data: user,
            dataType: 'json',
            success: function (data) {
                if (data.status == -1) {
                    $(".phone1_span").html(data.msg);
                    $(".phone-button").removeAttr("disabled");
                    $(".phone-button").css('background-color','#3cb1cb');
                    return false;
                }
                if (data.status == -2) {
                    $(".mobilecodes_span").html(data.msg);
                    $(".phone-button").removeAttr("disabled");
                    $(".phone-button").css('background-color','#3cb1cb');
                    return false;
                }
                if (data.status == -3) {
                    $(".mobilecodes_span").html(data.msg);
                    $(".phone-button").removeAttr("disabled");
                    $(".phone-button").css('background-color','#3cb1cb');
                    return false;
                }else {
                    location.reload(true);
                    $(".phone-button").removeAttr("disabled");
                    $(".phone-button").css('background-color','#3cb1cb');
                    return true;
                }
            }
        });
    });
    var timeNum = 60;
    //验证码倒计时提示
    function topple(obj) {
        if(timeNum==0){
            obj.removeAttr('disabled');
            obj.html('发送验证码');
            obj.css('background','#ff873e');
            timeNum = 60;
            return;
        }else{
            obj.attr('disabled','true');
            obj.html('重新发送'+timeNum+'s');
            obj.css('background','#bbb7b7');
            timeNum--;
        }
        setTimeout(function () {
            topple(obj);
        },1000)
    }
    //注册发送短信验证码AJAX
    $(function(){
        $('#sms-form').submit(function(){
            var $this = $(this);
            if(!$this.hasClass('s-form')){
                $this.addClass('s-form');//锁定表单
                var formData = new FormData($this[0]);
                $.ajax({
                    url:"http://" + host + "/Home/mobile/message",
                    type:'POST',
                    data:formData,
                    dataType:'json',
                    cache: false,
                    contentType: false,
                    processData: false,
                    success:function(s){
                        if(s.status<0){
                            $this.removeClass('s-form');//解锁表单
                            var html = (s.code != 1 ? '错误提示：' : '')+s.msg;
                            $('.randCode_span').html(html);
                            return false;
                        }else{
                            var msg = (s.code != 1 ? '发送成功，请填写：' : '')+s.msg;
                            $('.mobilecode_span').html(msg);
                            topple($('#btnSendCode'));
                        }
                    }
                });
            }
            return false;
        });
    });
    //登录发送短信验证码AJAX
    $(function(){
        $('#sms-forms').submit(function(){
            var $this = $(this);
            if(!$this.hasClass('s-forms')){
                $this.addClass('s-forms');//锁定表单
                var formData = new FormData($this[0]);
                $.ajax({
                    url:"http://" + host + "/Home/Mobile/LoginMessage",
                    type:'POST',
                    data:formData,
                    dataType:'json',
                    cache: false,
                    contentType: false,
                    processData: false,
                    success:function(s){
                        if(s.status<0){
                            $this.removeClass('s-forms');//解锁表单
                            return false;
                        }else{
                            var msg = (s.code != 1 ? '发送成功，请填写：' : '')+s.msg;
                            $('.mobilecodes_span').html(msg);
                            topple($('#btnSendCodes'));
                            return false;
                        }
                    }
                });
            }
            return false;
        });
    });
});