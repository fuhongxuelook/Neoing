require(["jquery", "common"],
    function (_$, _common) {
        //搜索
        $('.search a img.souicon').click(function (e) {
            $(this).toggleClass('active').siblings().toggleClass('active');
            $('.searchBox').slideDown();
            $('.searchBox input').val('').focus();
        });
        function rotateback() {
            if ($('.search img.close').hasClass('active')) {
                $('.search img.close').addClass('back');
                setTimeout(function () {
                    $('.searchBox').slideUp();
                    $('.search img.close').toggleClass('active').removeClass('back').siblings().toggleClass('active');
                }, 500);
            };
        }
        $('.searchBox input').blur(function () {
            $('.searchBox').slideUp();
            rotateback();
        }).focus(function () {
            $(this).keydown(function (e) {
                if (e.keyCode == 13) {
                    var keyword = $(this).val();
                    if (keyword !== '') {
                        var url = "/Common/SearchResult?keys=" + encodeURIComponent(keyword);
                        location.href = url;
                    } else {
                        alert("搜索关键字不能为空，请输入");
                    }
                }
            });
        });
    });