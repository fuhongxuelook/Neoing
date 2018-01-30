/**
 * Created by Administrator on 2017/8/27.
 */

$(function () {
    //全局的checkbox选中和未选中的样式
    var $cartMain = $('.cartMain'),     //挂在委托事件的节点
        $wholeChexbox = $('.whole_check');              //全局的全选box


    //全局checkbox勾选未勾选样式
    $cartMain.on('click','input[type="checkbox"]',function () {
        if ($(this).is(':checked')) {
            $(this).siblings('label').addClass('mark');
        } else {
            $(this).siblings('label').removeClass('mark')
        }
    })

    //=========================全局全选与单个商品的关系、单个商品与店铺之间的关系=====================
    $wholeChexbox.click(function () {
        var $cartBox = $('.cartBox');
        var $checkboxs = $cartBox.find('input[type="checkbox"]');
        if ($(this).is(':checked')) {
            $checkboxs.prop("checked", true);
            $checkboxs.siblings('label').addClass('mark');
        } else {
            $checkboxs.prop("checked", false);
            $checkboxs.siblings('label').removeClass('mark');
        }
        totalMoney();
    });

    $cartMain.on('click','.son_check',function () {
        if($(this).is(':checked')){
            var $sonCheckBox = $('.son_check'),
                $len = $sonCheckBox.length,
                $num = 0;
            var $shop_sonCheck = $(this).parents('.cartBox').find('.son_check'),
                $sLen = $shop_sonCheck.length,
                $sNum = 0;
            //判断：所有单个商品是否勾选
            $sonCheckBox.each(function () {
                if ($(this).is(':checked')) {
                    $num++;
                }
            });
            //判断点击此商品的店铺所有商品是否勾选
            $shop_sonCheck.each(function () {
                if ($(this).is(':checked')) {
                    $sNum++;
                }
            });
            //店铺所有商品勾选，店铺全选勾选
            if($sNum == $sLen){
                $(this).parents('.cartBox').find('.shopChoice').prop("checked", true);
                $(this).parents('.cartBox').find('.shopChoice').siblings('label').addClass('mark');
            }
            //所有单个商品勾选，全局全选勾选
            if ($num == $len) {
                $wholeChexbox.prop("checked", true);
                $wholeChexbox.siblings('label').addClass('mark');
            }
        }else{
            //店铺有商品没有你勾选，店铺全选取消勾选
            $(this).parents('.cartBox').find('.shopChoice').prop("checked", false);
            $(this).parents('.cartBox').find('.shopChoice').siblings('label').removeClass('mark');
            //单个商品取消勾选，全局全选取消勾选
            $wholeChexbox.prop("checked", false);
            $wholeChexbox.siblings('label').removeClass('mark');
        }
        totalMoney();
    })

    //===============每个店铺checkbox与全选checkbox的关系=====================================
    //店铺有一个未选中，全局全选按钮取消对勾，若店铺全选中，则全局全选按钮打对勾。
    $cartMain.on('click','.shopChoice',function () {
       if($(this).is(':checked')){
           //判断：店铺全选中，则全局全选按钮打对勾
           var $shopCheckbox = $('.shopChoice'),
               len = $shopCheckbox.length,
               num = 0;
           $shopCheckbox.each(function () {
               if ($(this).is(':checked')) {
                   num++;
               }
           });
           if (num == len) {
               $wholeChexbox.prop("checked", true);
               $wholeChexbox.siblings('label').addClass('mark');
           }
           //店铺下的checkbox选中状态
           $(this).parents('.cartBox').find('.son_check').prop("checked", true);
           $(this).parents('.cartBox').find('.son_check').siblings('label').addClass('mark');
       }else{
           //否则，全局全选按钮取消对勾
           $wholeChexbox.prop("checked", false);
           $wholeChexbox.siblings('label').removeClass('mark');
           $(this).parents('.cartBox').find('.son_check').prop("checked", false);
           $(this).parents('.cartBox').find('.order_content label').removeClass('mark');
       }
        totalMoney();
    });

    //========================商品数量=========================
    $cartMain.on('click','.plus',function () {
        var $inputVal = $(this).prev('input'),
            $count = parseInt($inputVal.val())+1,
            $priceTotalObj = $(this).parents('.order_lists').find('.sum_price'),
            $price = $(this).parents('.order_lists').find('.price').html(),  //单价
            $priceTotal = $count*parseInt($price.substring(1)),              //单个商品总计金额
            $obj = $(this).parents('.amount_box').find('.reduce'),
            $maxNum = $(this).siblings('input').val();
        if($count<=$maxNum){
            $inputVal.val($count);
            $priceTotalObj.html('￥'+$priceTotal);
        }else{
            alert('该商品库存为：'+$maxNum+'，不能超过库存最大数');
        }
        if($inputVal.val()>1 && $obj.hasClass('reSty')){
            $obj.removeClass('reSty');
        }
        totalMoney();
    });
    $cartMain.on('click','.reduce',function () {
        var $inputVal = $(this).next('input'),
            $count = parseInt($inputVal.val())-1,
            $priceTotalObj = $(this).parents('.order_lists').find('.sum_price'),
            $price = $(this).parents('.order_lists').find('.price').html(),  //单价
            $priceTotal = $count*parseInt($price.substring(1));             //单个商品总计金额
        if($inputVal.val()>1){
            $inputVal.val($count);
            $priceTotalObj.html('￥'+$priceTotal);
        }
        if($inputVal.val()==1 && !$(this).hasClass('reSty')){
            $(this).addClass('reSty');
        }
        totalMoney();
    });
    $cartMain.on('keyup','.sum',function () {
        var $count = 0,
            $priceTotalObj = $(this).parents('.order_lists').find('.sum_price'),
            $price = $(this).parents('.order_lists').find('.price').html(),  //单价
            $priceTotal = 0,
            $maxNum = $(this).siblings('input').val();
        if($(this).val()==''){
            $(this).val('1');
        }
        $(this).val($(this).val().replace(/\D|^0/g,''));
        $count = $(this).val();
        if(Number($count)<=$maxNum){
            $priceTotal = $count*parseInt($price.substring(1));
            $(this).attr('value',$count);
            $priceTotalObj.html('￥'+$priceTotal);
        }else{
            $(this).val('1');
            alert('该商品库存为：'+$maxNum+'，不能超过库存最大数');
        }
        totalMoney();
    });

    //======================================移除商品====================================
    var $order_lists = null;
    var $order_content = '';
    $cartMain.on('click','.delBtn',function () {
        $order_lists = $(this).parents('.order_lists');
        $order_content = $order_lists.parents('.order_content');
        var $id = $(this).parents('.order_lists').find('.id').val();
        $('.carts_id').val($id);
        $('.model_bg').fadeIn(300);
        $('.my_model').fadeIn(300);
    });
    //关闭模态框
    $('.closeModel').click(function () {
        closeM();
    });
    $('.dialog-close').click(function () {
        closeM();
    });
    function closeM() {
        $('.model_bg').fadeOut(300);
        $('.my_model').fadeOut(300);
    }
    //确定按钮，移除商品
    $('.dialog_sure').click(function () {
      var id = $(this).parents('.my_model').find('.carts_id').val();
      $.ajax({
            type: "get",
            url: "../carts/delete",
            data: {id:id},
            dataType: 'json',
            success: function (data) {
                if(data.status==1){
                    window.location.reload();
                }else{
                    alert(data.msg);
                    return false;
                }

            }
        });
    });
    //======================================总计==========================================

    function totalMoney() {
        var total_money = 0;
        var total_count = 0;
        var calBtn = $('.calBtn a');
        var $sonCheckBox = $('.son_check');
        $sonCheckBox.each(function () {
            if ($(this).is(':checked')) {
                var goods = parseInt($(this).parents('.order_lists').find('.sum_price').html().substring(1));
                var num =  parseInt($(this).parents('.order_lists').find('.sum').val());
                total_money += goods;
                total_count += num;
            }
        });
        $('.total_text').html('￥'+total_money);
        $('.piece_num').html(total_count);
        if(total_money!=0 && total_count!=0){
            if(!calBtn.hasClass('btn_sty')){
                calBtn.addClass('btn_sty');
            }
        }else{
            if(calBtn.hasClass('btn_sty')){
                calBtn.removeClass('btn_sty');
            }
        }
    }

    $('.calBtn a').click(function () {
        var upData ={};
        var shopItem = [];
        $('.order_lists').each(function (index, item) {
            if($(item).find('.son_check').is(':checked')){
                var itemJson = {};
                var $id = $(item).find('.id').val();
                var $sum = $(item).find('.sum').val();
                var $sum_price = $(item).find('.sum_price').html().substring(1);
                itemJson['id'] = $id;
                itemJson['number'] = $sum;
                itemJson['price'] = $sum_price;
                shopItem.push(itemJson);
            }
        });
        upData['carts_data'] = shopItem;
        upData['total'] = $('.piece_num').html();
        upData['amount'] = $('.total_text').html().substring(1);
        $.ajax({
            type: "POST",
            url: "../orderAddress/cartsDataSave",
            data: upData,
            dataType: 'json',
            success: function (data) {

                if(data.status==1){
                    window.location.href='../orderAddress/index'
                }else{
                    alert(data.msg);
                    return false;
                }

            }
        });
    });
});