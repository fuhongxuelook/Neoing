/**
 * Created by 小剑 on 2017/5/31.
 */
$(function () {
    //二级菜单效果
    var $subLi = $('.sub_menu li');
    var $menuLi = $('.menu>li');
    $subLi.mouseenter(function () {
        var $arrow = $('<span class="arrow">></span>');
        $(this).children('a').addClass('move');
        $(this).append($arrow);
    }).mouseleave(function () {
        $(this).children('a').removeClass('move');
        $(this).children('.arrow').remove();
    });

    var index = getCookie('clickedIndex');
    console.log(index)
    if(index){
        $('.menu .menu_li').eq(index).addClass('active').siblings().removeClass('active');
    }

    $menuLi.click(function () {
        index = $(this).index();
        // console.log(index);
        document.cookie = 'clickedIndex='+index;
    });

    $subLi.click(function () {
        index = $(this).parents('.menu_li').index();
        document.cookie = 'clickedIndex='+index;
    });


    function getCookie(name) {
        var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
        if(arr=document.cookie.match(reg)){
            return arr[2];
        }else{
            return null;
        }
    }
})