
	<section class="grid3d vertical" id="grid3d">
    <div class="grid-wrap">
      <div id="container" class="grid">
      
     <?php $loopNo = 1; ?>
         
      	<?php $my_query = new WP_Query('post_type=post' ); ?>
        <?php if ( $my_query->have_posts() ) : ?>
        <?php /* Start the Loop */ ?>
        <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
        <?php $loopNo++; ?>
      		<?php include 'ui-id-grid-item.php'; ?>
		<?php endwhile; ?>
        <?php //understrap_paging_nav(); ?>
        <?php else : ?>
        <?php // get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        
        
     
        
        </div>
      </div>
      <!-- /grid-wrap -->
      <div class="content">
        <div>
            <textarea rows="4" cols="50" style="height:95%; width:95%; color:#000; border:1px solid #666; margin:10px;">
You can type your feeback for a selected item here!!!! 
</textarea>
        </div>
        <span class="loading"></span> <span class="icon close-content"></span> </div>
      </section>