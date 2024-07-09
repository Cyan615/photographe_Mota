<form action="#" method="post" id="gallery-filters" class="catalogPhoto__filters">

	<div class="col1">
        <!-- Filtre par cathegorie -->
        <select class="filter" name="filterCategorie"  id="filterCategorie" onchange="highlightSelectedOption('filterCategorie')">  
            <option id="allCategory" value="allCat"  selected >categorie</option>
            <?php
            $terms = get_terms('categorie'); ?>
            <?php foreach ($terms as $term) :
				echo '<option id="' . $term->term_id . '" value="' . $term->slug .'"name ="filterCategorie" class="category_photo_filters"/> '. $term->name . '</option>'; 
			endforeach; ?>
                                
        </select>
        
        <!-- Filtre par format -->
        
        <select class="filter"  name="filterFormat"  id="filterFormat" onchange="highlightSelectedOption('filterFormat')">
            <option id="allFormat" value="allFor" selected >format</option>    
            <?php  
            $terms = get_terms('format');
            foreach ($terms as $term) :
				echo '<option id="' . $term->term_id . '" value="' . $term->slug .'"name ="' .$term->name .'" class="format_photo_filters"/> '. $term->name . '</option>'; 
			endforeach; ?>
        </select>
    </div>
    <div class="col2">
        <!-- filtre par date -->
        <select name="filterDate" id="filterDate"  class="filter" onchange="highlightSelectedOption('filterDate')">
                
            <option id="allOrder" value="all" selected >trié à partir</option>
            <option id="descOrder" value="DESC">du plus récent</option>
            <option id="ascOrder" value="ASC">du plus ancien</option>
                
        </select>
    </div>
    
    <!-- required hidden field for admin-ajax.php -->
    <input type="hidden" name="action" value="motaphotofilter" />
			
</form>




