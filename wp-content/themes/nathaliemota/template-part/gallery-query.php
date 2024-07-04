<?php  
/**
 * * handler Ajax pour la fonction 'charger plus'
 * 
 */
function loadMore_photographie() {
    
    $paged = isset($_POST['page'])? sanitize_text_field($_POST['page']):1;
    
    $arg= array(
        'post_type'     => 'photographie',
        'posts_per_page' => 8,
        'paged'         => $paged,
        
    );

    $myquery = new WP_Query($arg);
    

    if ($myquery->have_posts()) :
        while ($myquery->have_posts()):$myquery->the_post() ; 
          
            get_template_part('template-part/content-photo', 'post');
        endwhile;
    else:
        echo'';
    endif;
    
    wp_reset_postdata();
    die();
    
}
   
add_action('wp_ajax_load_more', 'loadMore_photographie');
add_action('wp_ajax_nopriv_load_more', 'loadMore_photographie');

// *** cherché les photos avec les filtres ***
function load_filters_photo(){
    $category = isset($_POST['categorie']) ? sanitize_text_field($_POST['categorie']) : '';
    $format = isset($_POST['format']) ? sanitize_text_field($_POST['format']) : '';
    $trie = isset($_POST['date']) ? sanitize_text_field($_POST['date']) : '';

    $args = array(
        'post_type' => 'photographie',
        'posts_per_page' => 8,
    );

    if ($category && $category != 'allCat') {
        $args['tax_query'][] = array(
            'taxonomy' => 'categorie',
            'field' => 'slug',
            'terms' => $category,
        );
    }

    if ($format && $format != 'allFor') {
        $args['tax_query'][] = array(
            'taxonomy' => 'format',
            'field' => 'slug',
            'terms' => $format,
        );
    }

    if ($trie == 'DESC') {
        $args['orderby'] = 'date';
        $args['order'] = 'DESC';
    } elseif ($trie == 'ASC') {
        $args['orderby'] = 'date';
        $args['order'] = 'ASC';
    }

    $filtre_query = new WP_Query($args);
    
    if ($filtre_query->have_posts()) :
        ob_start();
        while ($filtre_query->have_posts()) : $filtre_query->the_post();
            get_template_part('template-part/content-photo', 'post');
        endwhile;
    else : 
        echo "<p>Aucune photographie pour le filtre choisi. </p>";
    endif;

    wp_reset_postdata();
    die();
};

add_action('wp_ajax_load_filters', 'load_filters_photo');
add_action('wp_ajax_nopriv_load_filters', 'load_filters_photo');