console.log("Chargement filtres & bouton charger plus");

jQuery(document).ready(function($){
// *** Filtres categorie, format et ordre */

    function collect_photo() {
        let data = {
            'action': 'load_filters',
            'categorie': $('#filterCategorie').val(),
            'format': $('#filterFormat').val(),
            'sort': $('#filterDate').val(),
        };

        $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: data, 
            success: function(response){
                $('.column-gallery').html(response);
                mypage = 2 ;
                $('#loadMore').show();
            }
        });
    };

    $('#filterCategorie, #filterFormat, #filterDate').on('change', function(){
        collect_photo();
    });


});

