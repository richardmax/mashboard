<figure id="item<?php echo $loopNo; ?>" 
			<?php 
				$format = get_post_format( $post_id );
				if ( false === $format ) {
					$format = 'standard';
					$imported_from = 'wordpress';
				}
				//$item_shape =  get_post_meta($post->ID, '_mb_content_shape', true);
				$item_rating =  get_post_meta($post->ID, '_mb_content_rating', true);
				$number_views = get_post_meta($post->ID, 'pageviews', true);
				
				
				$instagram_url =  get_post_meta($post->ID, 'instagram_url', true);
				$twitter_url =  get_post_meta($post->ID, 'twitter_permalink', true);
				$facebook_id =  get_post_meta($post->ID, 'facebook_id', true);
				
				
				
				if($format == 'audio'){ // audio
					//$item_shape =  'landscape';
					$item_shape =  'audio';
					$item_size =  'default';
				} else if($format == 'aside' || $format == 'link'){ // twitter, aside
					//$item_shape =  'landscape';
					$item_shape =  'text';
					$item_size =  'only';
					
					if($twitter_url){
						$imported_from = 'twitter';
					}
					
				} else if($format == 'image'){ // image, instagram
					
					if($instagram_url){
						$imported_from = 'instagram';
						//$item_shape =  'landscape';
						$instagram_meta =  get_post_meta($post->ID, 'raw_import_data', true);
						$json_a=json_decode($instagram_meta, true);
						$no_instagram_likes = $json_a['likes'][count];
						$item_shape =  'square';
						
						if(!$item_rating){
							if($no_instagram_likes >= 5){
							$item_size =  'large'; 
							}
							else if($no_instagram_likes >= 4){
								$item_size =  'medium'; 
							}else{
								$item_size =  'small'; 
							}
						}
						
						$instagram_comments = $json_a['comments'][data];
						$instagram_comments = $instagram_comments[0][text];
					}
					
					
				}else{
					
					
					
				/*if($format == 'image'){ // audio
				$instagram_url = 'testing';
				}*/
				
				
				
					if($facebook_id){
						$imported_from = 'facebook';
						//$item_shape =  'landscape';
						$item_shape =  'landscape';
						$item_size =  'small'; 
					}
				
					if($item_rating >80){
						$item_size =  'large';
						$imagethumb_size = 'large';
					}else if($item_rating >50){
						$item_size =  'medium';
						$imagethumb_size = 'medium';
					}else {
						// not set or under 40
						$item_size =  'small';
						$imagethumb_size = 'thumbnail';
					}
				}
				
				
				
				$image = null;
				if (has_post_thumbnail( $post->ID ) ):
           			$image_array = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), $imagethumb_size );
    				$image = $image_array[0];
					$image_width = $image_array[1];
					$image_height = $image_array[2];
					if($image_width > $image_height){
						$item_shape = 'landscape';
					}else if($image_width < $image_height){
						$item_shape = 'portrait';
					}else{
						$item_shape = 'square';
					}
				
				else : 
				
 					$image = catch_that_image();

            	endif;
				
				if(!$item_shape){
					$item_shape =  'landscape';
				}
				
				if(!$imported_from){
					$imported_from = 'wordpress';
				}
			
				$item_classes = 'item' . $loopNo . ' ' . $imported_from . ' ' . $item_shape . '-' . $item_size . ' item';
				post_class($item_classes); 
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
        <figcaption class="caption__overlay">
       
          <h2 class="caption__overlay__title">
            <?php 
				if($twitter_url){
					$my_title = stripUrls( $my_title );
				}
				echo ($my_title);
			?>
          </h2>
          <p>
          <?php 
			if($instagram_url){
				echo ($instagram_comments);
			}else if($twitter_url){
				//
			}
			else{
				echo ($my_content);
			}
		?>
        </p>
      </figcaption>
			
      <div class="kenburns">
        <div style="
                background-image: url('<?php echo $image; ?>');
                background-size: cover;   height: 100%;
                width: 100%;
                
  background-position: 50% 0%; 
   
            " 
            class="cover-image"
       ></div>
       </div>
  </figure>