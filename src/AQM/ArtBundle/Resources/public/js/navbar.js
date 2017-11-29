$(document).ready(function () {
    $('#rencontrez-nous-link').click(function (e) {
        e.preventDefault();

        var target = $(this).attr('href');

        $('html, body').stop().animate({ scrollTop: $(target).offset().top }, 1000);
    });

    $(window).scroll(function () {
        if ($(window).scrollTop() > 190) {
            $('#mainNavBar').addClass('navbar-fixed-top');
        }
        if ($(window).scrollTop() < 191) {
            $('#mainNavBar').removeClass('navbar-fixed-top');
        }
    });
});