<figure id="item<?php echo $loopNo; ?>" 
			<?php 
				post_class('item id-list-item'); 
			?>
            
            		
            
            	data-clicklink="<?php the_permalink() ?>" 
                data-rating="<?php echo $item_rating; ?>"
                number-views="<?php echo $number_views; ?>" 
            
			>
        	<?php 
				$my_title = get_the_title(); 
				if($format == 'audio'){
					$my_content = get_the_content(); 
				}else{
					if($item_size == 'large'){$my_content = mashboard_excerpt(180); }
					else if($item_size == 'medium'){$my_content = mashboard_excerpt(80); }
					else{$my_content = mashboard_excerpt(20); }
				}
				
				
				$click_url = get_url_from_content( $content );			
			?>
              <!-- div class='sku-no'>ID162836</div --> <figcaption class="caption__overlay_">
   
          <h2 class="caption__overlay__title_">
            <?php 
				if($twitter_url){
					$my_title = stripUrls( $my_title );
				}
				echo ($my_title);
			?>
          </h2>
          
      </figcaption>
			
     	
        <div class='add-item'>+</div>
  </figure>