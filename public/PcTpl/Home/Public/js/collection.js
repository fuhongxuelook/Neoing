$(function() {


    $(".shangpin").click(function () {//收藏店铺
        var shop_id=$(this).find('.shop_id').val();
        $.ajax({
            type: "POST",
            url: "../CustomerCollection/customer_collection",
            data: {shop_id: shop_id},
            dataType: 'json',
            success: function (data) {
                if (data.status == -1) {//未登录
                    alert(data.msg);
                    return false;
                }
                if (data.status == -404) {//添加失败，程序故障或网络原因
                    alert(data.msg);
                    return false;
                }
                if (data.status == 1) {
                    $(this).find('.heart1').css("background-position", "right");
                    alert(data.msg);
                    return true;
                }
                if (data.status == 2) {//已收藏
                    alert(data.msg);
                }
            }
        })
    });
});