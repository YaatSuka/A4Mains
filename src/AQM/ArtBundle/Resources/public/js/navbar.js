$(document).ready(function () {
    var pathname = window.location.pathname;

    $('#nav-bar-list > li > a[href="'+pathname+'"]').parent().addClass('active');
});