
<?php
/**
 * Template Name: Home
 
 */

 get_header();

 ?>
<main id="primary" class="site-main container">
    <!-- *********** banière ************** -->
<section class="banner">
    <img class="banner__img" src="<?php echo get_theme_file_uri().'./assets/images/nathalie.webp'; ?>" alt="">
    <h1 class="banner__slogan hero-slogan">photographe event</h1>

</section>
<!-- ************ section catalogue photos avec filtres de tri */ -->
<section class="catalogPhoto">
    <article  >
    <?php 
        get_template_part('template-part/filters', 'post');
    ?>
    </article>

<!-- Affichage gallerie photos -->
    <article class="column-gallery" id="galleryPhoto" >
<!-- ma boucle qui me ramène tous les custom post type "photographie" -->
<?php 
$displayed_posts = array();
$argsgallery = array(      // affichage de 8 photos au hasard 
	'post_type' => 'photographie',
	'posts_per_page' => 8,
    'order_by' => 'rand',
    
);
$query = new WP_Query( $argsgallery );  

 // boucle wp_jquery 
    if ($query->have_posts()) {
			while ($query->have_posts()) : $query->the_post();
			
				
			get_template_part('template-part/content-photo', 'post'); 
				
			endwhile;
            wp_reset_postdata();    // réinisialisé la requête wp_query
		}else{
            echo"Il n'y a pas de photoghaphie";
        };
        
?>      
    </article>

    <button id="loadMore" class="loadMore btn-more ">Charger plus</button>


</section>

</main><!-- #main -->



<?php get_footer(); ?>