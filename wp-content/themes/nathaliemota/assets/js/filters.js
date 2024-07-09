console.log("Chargement filtres & bouton charger plus");

function highlightSelectedOption(selectedId) {
    const selectElement = document.getElementById(selectedId);
    const selectedOption = selectElement.options[selectElement.selectedIndex];
    selectedOption.classList.add('highlighted');
};



jQuery(document).ready(function($){


    // habillage des select pour les filtres
    

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

