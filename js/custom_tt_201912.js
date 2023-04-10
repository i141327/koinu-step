$(function () {
    var scrollPos = $('#header-main').offset().top;
    $('body').on('load scroll', function () {
        var value = $(this).scrollTop();
        console.log(value);
        if (value > scrollPos) {
            $('#header-main').addClass('fixed');
            $('.pc-nav').addClass('fixed');
            $('.sp-nav').addClass('fixed');
            $('#sidemenu').addClass('fixed');
        } else {
            $('#header-main').removeClass('fixed');
            $('.pc-nav').removeClass('fixed');
            $('.sp-nav').removeClass('fixed');
            $('#sidemenu').removeClass('fixed');
        };
    });
    $('.menu-bt').on('click', function () {
        if ($(this).hasClass('open')) {
            $('#sidemenu').removeClass('open');
            $(this).removeClass('open');
            $('body').removeClass('fixed');
        } else {
            $('#sidemenu').addClass('open');
            $(this).addClass('open');
            $('body').addClass('fixed');
        };
    });
});