<?php

	

?>

<?php if ( $my_query->have_posts() ) : ?>
        <?php /* Start the Loop */ 
		
	
		?>
        <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
        	
            <?php 
            $xcategories = get_categories();
        	$xterms = array_merge($xterms, $xcategories);
		$arr = array_merge($arr,$temp_arr);
			
			?>
        
        <?php endwhile; ?>
              <?php //understrap_paging_nav(); ?>
              <?php else : ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
              
              <?php
              
              	//echo array_unique($xterms);
				
				?>
              

  <ul id="cat_filters" class="gn-menu">
 
              <li><a href="#" class='gn-icon gn-icon-illustrator' data-filter="*">Everything</a></li>
              <?php 
                $terms = get_terms("category"); // get all categories, but you can use any taxonomy
                $count = count($terms); //How many are they?
                if ( $count > 0 ){  //If there are more than 0 terms
                  foreach ( $terms as $term ) {  //for each term:
                    echo "<li class='_col-xs-6'><a href='#' class='gn-icon gn-icon-illustrator catfilterbut' data-filter='.category-".$term->slug."'>" . $term->name . "</a></li>\n";
                    //create a list item with the current term slug for sorting, and name for label
                  }
                } 
              ?>

</ul>