$('#nav').onePageNav({
    currentClass: 'active',
    changeHash: true,
    scrollspeed: 750
});

/****************************/

$(document).ready(function() {

    //Check to see if the window is top if not then display button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function() {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });

});

/****************************/

$(function() {
    $('#Container').mixItUp();
});

/****************************/
 
 new WOW().init();
 
 /****************************/

