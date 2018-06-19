$(function() {
    $.fn.scrollToTop = function() {
        $(this).hide().removeAttr("href");
        if ("0" != $(window).scrollTop()) $(this).fadeIn("slow");
        var a = $(this);
        $(window).scroll(function() {
            if ("0" == $(window).scrollTop()) $(a).fadeOut("slow"); else $(a).fadeIn("slow");
        });
        $(this).click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
        });
    };
});


$(function(){
	$("#toTop").scrollToTop();
});