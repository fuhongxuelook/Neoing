/**
 * Created by Administrator on 2017/4/24.
 */
//手机号栏失去焦点
$(function() {
    $("#phone").blur(function () {
        reg = /^1[3|4|5|6|7|8][0-9]\d{4,8}$/i;//验证手机正则(输入前7位至11位)

        if ($("#phone").val() == "") {
            $(".phone_span").html("手机号不能为空");
        }
        else if ($("#phone").val().length < 11) {
            $(".phone_span").html("手机号长度有误！");
        }
        else if (!reg.test($("#phone").val())) {
            $(".phone_span").html("逗我呢吧，你确定这是你的手机号!!");
        }
        else {
            $(".phone_span").html("");
        }
    });
    //手机验证码
    $("#mobilecode").blur(function () {

        if ($("#mobilecode").val() == "") {
            $(".mobilecode_span").html("手机验证码不能为空");
        }
        else {
            $(".mobilecode_span").html("");
        }
    });
//图片验证码
    $("#randCode").blur(function () {

        if ($("#randCode").val() == "") {
            $(".randCode_span").html("图片验证码不能为空");
        }
        else {
            $(".randCode_span").html("");
        }
    });
//密码
    $("#password").blur(function () {
        reg1 = /^.*[\d]+.*$/;
        reg2 = /^.*[A-Za-z]+.*$/;
        reg3 = /^.*[_@#%&^+-/*\/\\]+.*$/;//验证密码
        var Pval = $("#password").val();
        if (Pval == "") {
            $(".password_span").html("密码不能为空");
        }
        else if (Pval.length > 16 || Pval.length < 6) {
            $(".password_span").html("密码应为6-16个字符，区分大小写");
        }
        else if (!((reg1.test(Pval) && reg2.test(Pval)) || (reg1.test(Pval) && reg3.test(Pval)) || (reg2.test(Pval) && reg3.test(Pval)) )) {
            $(".password_span").html("需至少包含数字、字母和符号中的两种类型");
        }
        else {
            $(".password_span").html("");
        }
    });
    //确认密码
    $("#rpassword").blur(function () {
        var Pval = $("#rpassword").val();
        var Pva = $("#password").val();
        if (Pval == "") {
            $(".rpassword_span").html("确认密码不能为空");
        }
        else if (Pval == Pva) {
            $(".rpassword_span").html("");
        }
        else {
            $(".rpassword_span").html("两次密码不一致");
        }
    });

    $("#phone1").blur(function () {
        reg = /^1[3|4|5|8][0-9]\d{4,8}$/i;//验证手机正则(输入前7位至11位)

        if ($("#phone1").val() == "") {
            $(".phone1_span").html("用户名不能为空");
        }
        else {
            $(".phone1_span").html("");
        }
    });
    //密码
    $("#password1").blur(function () {
        var Pval = $("#password1").val();
        if (Pval == "") {
            $(".password1_span").html("密码不能为空");
        }
        else {
            $(".password1_span").html("");
        }
    });
    $("#randCode1").blur(function () {

        if ($("#randCode1").val() == "") {
            $(".randCode1_span").html("图片验证码不能为空");
        }
        else {
            $(".randCode1_span").html("");
        }
    });

});