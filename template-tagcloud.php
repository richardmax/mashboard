
<ul class="gn-menu">
      <?php wp_tag_cloud(array(
                                        'smallest' => 8,
                                        'largest' => 26,
                                        'number' => 150
                                    )); ?>
    </ul>
    <ul class="gn-menu">
      <?php wp_tag_cloud(array(
										'post_status' => 'inherit',
                                        'taxonomy' => 'att_tag',
										'smallest' => 8,
                                        'largest' => 26,
                                        'number' => 1500
                                    )); ?>
    </ul>
    
    