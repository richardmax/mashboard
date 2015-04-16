
	<section class="grid3d vertical" id="grid3d">
    <div class="grid-wrap">
      <div id="container" class="grid">
      
     <?php $loopNo = 1; ?>
         
      	<?php $my_query = new WP_Query('category_name=highlights' ); ?>
        <?php if ( $my_query->have_posts() ) : ?>
        <?php /* Start the Loop */ ?>
        <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
        <?php $loopNo++; ?>
      		<?php include 'content.php'; ?>
		<?php endwhile; ?>
        <?php //understrap_paging_nav(); ?>
        <?php else : ?>
        <?php // get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        
        
        <?php $my_query = new WP_Query('category_name=instagram&posts_per_page=30' ); ?>
        <?php if ( $my_query->have_posts() ) : ?>
        <?php /* Start the Loop */ ?>
        <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
        <?php $loopNo++; ?>
      		<?php include 'content.php'; ?>
		<?php endwhile; ?>
        <?php //understrap_paging_nav(); ?>
        <?php else : ?>
        <?php // get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        
        <?php $my_query = new WP_Query('category_name=tweet&posts_per_page=20' ); ?>
        <?php if ( $my_query->have_posts() ) : ?>
        <?php /* Start the Loop */ ?>
        <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
        <?php $loopNo++; ?>
      		<?php include 'content.php'; ?>
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
          <iframe id="iframe" style="width:100%;height:100%; border: 0 none; margin: 0; padding: 0;"></iframe>
        </div>
        <span class="loading"></span> <span class="icon close-content"></span> </div>
      </section>