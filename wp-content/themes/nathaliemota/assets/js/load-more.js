console.log('click charger plus');

jQuery(document).ready(function($){
    // bouton charger plus ->
var mypage = 2;
$('#loadMore').on('click', function(){
    // 
    var data = {
        'action': 'load_more',
        'page': mypage,
    };
    $.ajax({
        url: ajaxurl,
        type: 'POST',
        data: data,
        success: function(response){
            if (response) {
                $('#galleryPhoto').append(response);
                mypage++;
            }else{
                $('#loadMore').text('Fin de la gallery');
                $('#loadMore').prop('disabled',true);
            }
        },
    });


});
})