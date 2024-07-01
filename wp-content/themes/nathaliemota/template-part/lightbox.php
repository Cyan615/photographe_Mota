<?php 
if  (have_posts()) : 
    while ( have_posts() ) :
       the_post();  

    // -- Chemin url template --
    $template_uri = get_template_directory_uri();	

    endwhile;
   endif;     
   
?>


<section id="boxContainer-overlay" ">
    <article class="box-content">

        <button class="box__closeBtn"></button>
        <div class="blockPhoto">
            <div class="img-container">
                <img src=" " alt="photographie sélectionné" class="lightbox__image">
            </div>
            <div class="infoPhoto">
                <span class="box__refPhoto"></span>
                <span class="box__catPhoto"></span>
            </div>
        </div>

        <button class="box__prevArrow">
            <img class="arrowImg" src="<?php echo $template_uri; ?>/assets/images/fléche-avant.svg' " fill="white" alt="flèche photo précédente">Précédente
        </button>
        
        <button class="box__nextArrow">Suivante
            <img class="arrowImg" src="<?php echo $template_uri; ?>/assets/images/fléche-suivant.svg'" fill="white" alt="flèche photo suivante">
        </button>

        

    </article>
</section>