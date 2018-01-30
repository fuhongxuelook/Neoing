$(function() {
    $("#shop_collection").click(function () {//收藏店铺
        $.ajax({
            type: "POST",
            url: "../../CustomerCollection/customer_collection",
            data: {shop_id:$("#shop_id").val()},
            dataType: 'json',
            success: function (data) {
                if (data.status == -1) {//未登录
                    $('.loginBtn').click();
                    return false;
                }
                if(data.status==-404){//添加失败，程序故障或网络原因
                    alert(data.msg);
                    return false;
                }
                if(data.status==1){
                    $('.heart').css("background-position","right");
                    alert(data.msg);
                    return true;
                }
                if(data.status==2){//已收藏
                    alert(data.msg);
                }
            }
        })
    });

    $("#goods_collection").click(function () {//收藏店铺
        $.ajax({
            type: "POST",
            url: "../../CustomerCollection/customer_collection",
            data: {goods_id:$("#goods_id").val()},
            dataType: 'json',
            success: function (data) {
                if (data.status == -1) {//未登录
                    $('.loginBtn').click();
                    return false;
                }
                if(data.status==-404){//添加失败，程序故障或网络原因
                    alert(data.msg);
                    return false;
                }
                if(data.status==1){
                    $('.heart1').css("background-position","right");
                    alert(data.msg);
                    return true;
                }
                if(data.status==2){//已收藏
                    alert(data.msg);
                }
            }
        })
    });

})



