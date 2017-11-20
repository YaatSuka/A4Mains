$(document).ready(function () {
    $('input').focus(function () {
         var label = $("label[for='"+$(this).attr('id')+"']");
         $(label).attr('class', 'active');
    });
    $('input').blur(function () {
        var label = $("label[for='"+$(this).attr('id')+"']");
        if ($(this).val() === '') {
            $(label).attr('class', '');
        }
    });

    $('input').each(function () {
        var label = $("label[for='"+$(this).attr('id')+"']");
        if ($(this).val() !== '') {
            $(label).attr('class', 'active');
        }
    })
});