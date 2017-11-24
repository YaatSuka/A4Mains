$(document).ready(function () {

   $('.portfolio_img').click(function () {
       var id_modal = $(this).data('modal');

       $('#'+id_modal).show();
       var close_btn = $('#'+id_modal).find('span');

       $(close_btn).click(function () {
           $('#'+id_modal).hide();
       })
   });
});