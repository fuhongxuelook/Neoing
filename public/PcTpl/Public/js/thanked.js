$(function() {
    $(".div_img").click(function () {//对商品点赞
        $.ajax({
            type: "POST",
            url: "../../Thanked/add",
            data: {good_id:$("#good_id").val()},
            dataType: 'json',
            success: function (data) {
                if (data.status == -1) {//未登录
                    alert(data.msg);
                    return false;
                }
                if(data.status==-404){//添加失败，程序故障或网络原因
                    alert(data.msg);
                    return false;
                }
                if(data.status==1){//点赞成功
                    $('.thanked_number').html('点赞数:'+data.thanked_number);
                    $('.div_img').css("background-position","right");
                    return true;
                }
                if(data.status==2){//取消点赞
                    $('.thanked_number').html('点赞数:'+data.thanked_number);
                    $('.div_img').css("background-position","");
                    return true;
                }
            }
        })
    });
});



