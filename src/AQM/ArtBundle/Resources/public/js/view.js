$(document).ready(function () {

   $('.portfolio_img').click(function () {
       var id_modal = $(this).data('modal');

       $('#'+id_modal).show();
       var close_btn = $('#'+id_modal).find('span');

       $(close_btn).click(function () {
           $('#'+id_modal).hide();
       })
   });

   $('#rencontrez-nous-link').click(function (e) {
       e.preventDefault();

       var target = $(this).attr('href');

       $('html, body').stop().animate({ scrollTop: $(target).offset().top }, 1000);
   });
});