/**
 * Created by Administrator on 2017/6/15.
 */
var $avatarInput = '';
$(function () {

    //没有内容时候
    var mainItem1 = $('.recommend'),
        mainItem2 = $('.category'),
        videoItem = $('.video'),
        articleItem = $('.article');
    var session = $('#session').val(),
        mySessionStr = window.location.href;
    var userSession = mySessionStr.substr(mySessionStr.lastIndexOf('/')+1);

    if(mainItem1.length == 0 && mainItem2.html().trim()=='' && userSession == session){
        var boxM = '<div class="empty-box">您暂时还没有作品，请上传您的作品！</div>';
        $('.main-item1').append(boxM);
    }else if(mainItem1.length == 0 && mainItem2.html().trim()=='' && userSession != session){
        var boxM2 = '<div class="empty-box">该店铺还没有上传作品</div>';
        $('.main-item1').append(boxM2);
    }

    if(videoItem.html().trim()=='' && userSession == session){
        var boxV = '<div class="empty-box">您暂时还没有视频，请上传您的视频！</div>';
        videoItem.append(boxV);
    }else if(videoItem.html().trim()=='' && userSession != session){
        var boxV2 = '<div class="empty-box">该店铺还没有上传视频</div>';
        videoItem.append(boxV2);
    }

    if(articleItem.html().trim()=='' && userSession == session){
        var boxA = '<div class="empty-box">您暂时还没有文章，请发表您的文章！</div>';
        articleItem.append(boxA);
    }else if(articleItem.html().trim()=='' && userSession != session){
        var boxA2 = '<div class="empty-box">该店铺还没有上传文章</div>';
        articleItem.append(boxA2);
    }


    $('.nav_menu .tab').click(function () {
        $(this).find('.tab_bg').stop().animate({width:280},1000);
        $(this).find('a').delay(500).css('color','#fff');
        $(this).siblings().find('.tab_bg').stop().animate({width:0},1000);
        $(this).siblings().find('a').delay(500).css('color','#444');
    });

    //页面切换效果
    var $fixedBtn =  $('.fixed-btn'),
        $asideBar = $('.aside-bar'),
        $asideCon = $('.aside-content'),
        $body = $('body'),
        $markBg = $('.mark-bg'),
        $onOffBtn = true;
    $fixedBtn.click(function () {
        if($onOffBtn){
            $asideBar.stop().animate({'left':0},500,'linear');
            $asideCon.stop().animate({'marginLeft':280},500,'linear');
            $body.css('overflow-y','hidden');
            $markBg.show();
            $onOffBtn = false;
        }else{
            $asideBar.stop().animate({'left':-280},500,'linear');
            $asideCon.stop().animate({'marginLeft':0},500,'linear');
            $body.css('overflow-y','auto');
            $markBg.hide();
            $onOffBtn = true;
        }

    });


    var iH = $(window).height();
    var $shop = $('.shop-box .content');
    $shop.height(iH);

    $('.arrow-down').click(function () {
        var scrollHight = iH + $shop.offset().top;
        $("html,body").animate({scrollTop:scrollHight}, 500);
    });

    //上传封面按钮
    $('.changeBtn').click(function () {
        $('#avatar-modal').modal('toggle');
    });

    var $image = $('.avatar-wrapper>img'),
        dataURL;
    var imgData,
        imgSize,
        imgType;
    $image.cropper({
        aspectRatio: 2,
        preview: '.avatar-preview',
        built: function () {
            imgData = $image.cropper('getImageData')
        }
    });
    // Import image
    var $inputImage = $('#avatarInput'),
        URL = window.URL || window.webkitURL,
        blobURL;
    if (URL) {
        $inputImage.change(function () {
            var files = this.files,
                file;
            if (files && files.length) {
                file = files[0];
                blobURL = URL.createObjectURL(file);
                $image.one('built.cropper', function () {
                    URL.revokeObjectURL(blobURL); // Revoke when load complete
                }).cropper('reset', true).cropper('replace', blobURL);
            }
            imgSize = file.size;
            $avatarInput = this.value;
            if($avatarInput){
                if (/\.(png|PNG)$/.test($avatarInput)) {
                    imgType = 'image/png';
                    $avatarInput = '';
                    return false;
                }else if(/\.(jpg|jpeg|JPG)$/.test($avatarInput)){
                    imgType = 'image/jpeg';
                    $avatarInput = '';
                    return false;
                }
            }
        });
    } else {
        $inputImage.parent().remove();
    }
    $('#save').click(function () {
        var photo = $image.cropper('getCroppedCanvas');
        if(imgData.naturalWidth<1200){
            //清空弹出框的内容
            $avatarInput = '';
            $('#avatarInput').val('');
            $('.cropper-container').remove();
            $('.avatar-preview').empty();
            alert('上传图片宽度必须大于1200px');
            return false;
        }else if(imgSize<1024){
            //清空弹出框的内容
            $avatarInput = '';
            $('#avatarInput').val('');
            $('.cropper-container').remove();
            $('.avatar-preview').empty();
            alert('上传图片必须小于1MB');
            return false;
        }else{
            //清空弹出框的内容
            $('#avatarInput').val('');
            $('.cropper-container').remove();
            $('.avatar-preview').empty();
            $('.canvas-box').append(photo);

            var canvas = document.getElementsByTagName('canvas')[0];
            dataURL = canvas.toDataURL(imgType);

            $.ajax({
                url:"./uploadCover",
                data:{"data":dataURL},
                type:'post',
                success:function (data) {
                    if(data.status=1){
                        alert('成功');
                        location.reload();
                    }else{
                        alert('失败');
                        return false;
                    }
                },
            });
        }
    });

//    标题切换底部横条样式
    $('.title-con>div').click(function () {
        var index = $(this).index();
        $(this).addClass('active').siblings().removeClass('active');
        $('.include-box>div').eq(index).show().siblings().hide();
    });

    //作品收藏点赞的心
    var $mHeart = $('.main-item .heart'),
        $collect = $('.collect');
    for(var m=0;m<$collect.length;m++){
       var numH = $collect.eq(m).find('.heart').attr('data-state');
       if(numH == 0){
           $collect.eq(m).addClass('on');
       }
    }
    $collect.click(function () {
        var _this = $(this);
        var goods_list_id = _this.find('input').val();
        $.ajax({
            type: "POST",
            url: "../customerCollection/customer_collection",
            data: {goods_id: goods_list_id},
            success: function (data) {
                var result = JSON.parse(data);
                console.log(result);
                if(result.status==1){
                    $(_this).addClass('on');
                    _this.find('.heart').removeClass('icon-dianzan').addClass('icon-dianzandian-copy');
                    _this.find('.heart').attr('data-state','0');
                    _this.find('.text').html(result.count);
                }else if(result.status==2){
                    // _this.removeClass('icon-dianzandian-copy').addClass('icon-shoucang');
                    alert(result.msg);
                }else {
                    alert(result.msg);
                }
            }
        });
    });

    $collect.mouseenter(function () {
        var $this_heart = $(this).find('.heart'),
            $onOff = Boolean(Number($(this).find('.heart').attr('data-state')));
        if($onOff && $this_heart.hasClass('icon-dianzan')){
            $this_heart.removeClass('icon-dianzan').addClass('icon-dianzandian-copy');
        }
    }).mouseleave(function () {
        var $this_heart = $(this).find('.heart'),
            $onOff = Boolean(Number($(this).find('.heart').attr('data-state')));
        if($onOff && $this_heart.hasClass('icon-dianzandian-copy')){
            $(this).find('.heart').removeClass('icon-dianzandian-copy').addClass('icon-dianzan');
        }
    });

    //文章收藏点赞的心
    $('.article-box .heart').click(function () {
        var article_id = $(this).next('.article_id').val();
        var _this = $(this);
        $.ajax({
            type: "POST",
            url: "../thanked/add",
            data: {article_id: article_id},
            success: function (data) {
                var result = JSON.parse(data);

                if(result.status==1){
                    _this.removeClass('icon-dianzan').addClass('icon-dianzandian-copy');
                    alert(result.msg);
                }
                if(result.status==2){
                    _this.removeClass('icon-dianzandian-copy').addClass('icon-dianzan');
                    alert(result.msg);
                }else {
                    alert(result.msg);
                }
            }
        });
    });

    //查看更多
    var $wrapper = $('.wrapper'),
        $categoryItem = $('.category-item'),
        $moreBtn = $('.more-btn'),
        arr_item = new Array($categoryItem.length);

    var $wrapperbox = $wrapper.find('.wrapper-box').length;
    if($wrapperbox == 0){
        $wrapper.remove();
    }

    for(var k=0;k<arr_item.length;k++){
        arr_item[k] = 6;
        $moreBtn.eq(k).attr('data-num',0);
    }

    //作品板块
    for(var i=0;i<$categoryItem.length;i++){
        var imgBoxLen = $categoryItem.eq(i).find('.img_box').length;
        var count = Math.ceil(imgBoxLen/6);
        var itemListCon = $categoryItem.eq(i).find('.item-list').html();
        if(itemListCon.trim() == ''){
            $categoryItem.eq(i).remove();
        }
        $categoryItem.eq(i).attr('data-count',count);
        if(imgBoxLen>6){
            for(var j=0;j<6;j++){
                $categoryItem.eq(i).find('.img_box').eq(j).show();
            }
        }else{
            $categoryItem.eq(i).find('.img_box').show();
            $moreBtn.eq(i).hide();
        }
    }

    $moreBtn.click(function () {
        var num = $(this).attr('data-num');
        var dataCount = $(this).parents('.category-item').attr('data-count');
        if(num<dataCount-1){
            var index = $(this).parents('.category-item').index();       //第几个板块
            var total = $categoryItem.eq(index).find('.img_box').length; //这个板块下总共的作品数
            $(this).attr('data-num',++num);
            if(total>6){
                var startNum = arr_item[index];
                arr_item[index] += 6;
                for(var m=startNum;m<arr_item[index];m++){
                    $categoryItem.eq(index).find('.img_box').eq(m).show();
                }
            }
        }else{
            $(this).parents('.category-item').append('<p class="item-text">该作品集的作品已经加载完成</p>');
            $(this).remove();
        }
    });

    //文章板块
    var $articleBox = $('.article-box'),
        len = $articleBox.length;
    $.each($articleBox,function () {
        var remainder = len%3;
        if(len>3){
            if(remainder == 2){
                $articleBox.eq(len-2).css('marginLeft','160px');
            }else if(remainder == 1){
                $articleBox.eq(len-1).css('marginLeft','310px');
            }
        }else if(len==2){
            $articleBox.eq(0).css('marginLeft','160px');
        }else if(len==1){
            $articleBox.eq(0).css('marginLeft','310px');
        }
    });

    //展开伸缩菜单
    var $subMenu = $('.sub-menu'),
        $mainMenu = $('.main-menu');
    $subMenu.hide();
    $mainMenu.on('click','.menu-hd',function () {
        $(this).next('.sub-menu').slideToggle().siblings('.sub-menu').slideUp();
    });

    //加关注
    $('.follow').click(function () {
        var shop_id = $('#shop_id').val();
        $.ajax({
            type: "POST",
            url: "../CustomerCollection/customer_collection",
            data: {shop_id:shop_id},
            dataType: 'json',
            success: function (data) {
                if(data.status==-1){
                    alert(data.msg);
                    return false;
                }else if(data.status==-404){
                    alert(data.msg);
                    return false;
                }else if(data.status==1){
                    alert(data.msg);
                    return false;
                }else if(data.status==2){
                    alert(data.msg);
                }
            }
        })
    });

    var topBtn = $('.top');
    topBtn.click(function () {
        $("html,body").animate({'scrollTop':0},800,'linear');
    });
    topBtn.mouseenter(function () {
        $(this).css('backgroundPosition','0 -48px');
    }).mouseout(function () {
        $(this).css('backgroundPosition','0 0');
    });

    $(window).scroll(function () {
        var winPos = $(window).scrollTop();
        if(winPos>700){
            topBtn.css('opacity','1');
            return false;
        }else{
            topBtn.css('opacity','0');
        }
    });

//    轮播
    var $wrapperUl = $('.wrapper-ul'),
        $wrapperBox = $('.wrapper-box'),
        $nextBtn = $('.next-btn'),
        $preBtn = $('.prev-btn'),
        $len = $wrapperBox.length,
        $moveCount = $len-3,
        num = 0;
    $wrapperUl.width(300*$len);

    $nextBtn.click(function () {
        if(num<$moveCount){
            num++;
            $wrapperUl.stop().animate({'left':-300*num},400,'linear');
        }
    });

    $preBtn.click(function () {
        if(num>0){
            num--;
            $wrapperUl.stop().animate({'left':-300*num},400,'linear');
        }
    });

});