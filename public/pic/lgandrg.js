/**
 * Created by Administrator on 2017/4/24.
 */
$(document).ready(function() {
    $(".button-login").click(function () {
        alert('aa');
        var user = {
            username: $("#phone").val(),
            randCode:$("#randCode").val(),
            mobileCode:$("#mobilecode").val(),
            pwd: $("#password").val(),
            rpwd: $("#rpassword").val(),
        };
        $.ajax({
            type: "POST",
            url: "../Mobile/post",
            data: user,
            dataType: 'json',
            success: function (data) {

                if(data.status == -1){
                    alert(data.msg);
                    return false;
                }
                if(data.status == -1){
                    alert(data.msg);
                    return false;
                }
                if(data.status == -2){
                    alert(data.msg);
                    return false;
                }
                if(data.status == -3){
                    alert(data.msg);
                    return false;
                }
                if(data.status == -4){
                    alert(data.msg);
                    return false;
                }
                if(data.status == -5){
                    alert(data.msg);
                    return false;
                }
                if(data.status == -5){
                    alert(data.msg);
                    return false;
                }
                else {
                    location.replace();
                    return true;
                }

            }
        })
    });
});