<section id="boxContainer-overlay" role="dialog">
    <article class="box-content">

        <button class="box__closeBtn"></button>

        <button class="box__prevArrow">
            <img class="arrowImg" src="<?php echo $template_uri; ?>/assets/images/fleche-prev.svg') " alt="flèche photo précédente">Précédente
        </button>

        <button class="box__nextArrow">Suivante
            <img class="arrowImg" src="<?php echo $template_uri; ?>/assets/images/fleche-next.svg') " alt="flèche photo suivante">
        </button>

        <div class="img-container">
            <img src="" alt="photographie sélectionné" class="lightbox__image">
        </div>

        <span class="box__refPhoto"></span>
        <span class="box__catPhoto"></span>
        
    </article>
</section>