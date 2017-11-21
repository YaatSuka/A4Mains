$(document).ready(function () {
   $('#filter-categorie').change(function () {
       var categorie = $(this).find(':selected').text();

       if (categorie !== 'Toutes') {
           $('.article-row').each(function () {
                var article_categorie = $(this).find('.article-categorie-libelle').text();

                if (article_categorie !== categorie) {
                    $(this).hide();
                }
                else {
                    $(this).show();
                }
           });
       }

       else {
           $('.article-row').each(function () {
               $(this).show();
           });
       }
   });
});