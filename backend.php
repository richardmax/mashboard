<?php
/*
Plugin Name: MashBoard Beta
Plugin URI: http://ricmax.com
Version: 0.0.2
Author: Richard Max
Author URI: http://ricmax.com
Description: A MashUp of all your posts and social network data, filterable and responsive. Works with the Keyring Plugin + its importers.
*/









add_theme_support( 'infinite-scroll', array(
    'container' => 'container',
	'type'           => 'click',
    'footer' => 'page',
) );





function mashboard_excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}




/* Shorten default excerpt */
add_filter( 'excerpt_length', 'custom_excerpt_length');
function custom_excerpt_length( $length ) {
		return 2000;
}













function tes_mb_create() {
    add_meta_box(
            'tes-meta', 'Search Engine Listing', 'tes_mb_function', 'post', 'side', 'high'
    );

    add_meta_box(
            'tes-meta', 'Search Engine Listing', 'tes_mb_function', 'page', 'side', 'high'
    );
}

add_action('add_meta_boxes', 'tes_mb_create');

function tes_mb_function($post) {

//retrieve the metadata values if they exist
    //$mb_content_shape = get_post_meta($post->ID, '_mb_content_shape', true);
    $mb_content_rating = get_post_meta($post->ID, '_mb_content_rating', true);

// Add an nonce field so we can check for it later.
    wp_nonce_field('tes_inner_custom_box', 'tes_inner_custom_box_nonce');

    echo '<div style="margin: 10px 100px; text-align: center">
  <table>
    
    <tr>
      <td><strong>Content Rating:</strong></td><td>     <textarea  rows="3" cols="50" name="mb_content_rating">' . esc_attr($mb_content_rating) . '</textarea></td>
    </tr>
  </table>
</div>';
}

function tes_mb_save_data($post_id) {
    /*
     * We need to verify this came from the our screen and with proper authorization,
     * because save_post can be triggered at other times.
     */

// Check if our nonce is set.
    if (!isset($_POST['tes_inner_custom_box_nonce']))
        return $post_id;

    $nonce = $_POST['tes_inner_custom_box_nonce'];

// Verify that the nonce is valid.
    if (!wp_verify_nonce($nonce, 'tes_inner_custom_box'))
        return $post_id;

// If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;

// Check the user's permissions.
    if ('page' == $_POST['post_type']) {

        if (!current_user_can('edit_page', $post_id))
            return $post_id;
    } else {

        if (!current_user_can('edit_post', $post_id))
            return $post_id;
    }

    /* OK, its safe for us to save the data now. */

// If old entries exist, retrieve them
    $old_title = get_post_meta($post_id, '_mb_content_shape', true);
    $old_description = get_post_meta($post_id, '_mb_content_rating', true);

// Sanitize user input.
    $title = sanitize_text_field($_POST['mb_content_shape']);
    $description = sanitize_text_field($_POST['mb_content_rating']);

// Update the meta field in the database.
    update_post_meta($post_id, '_mb_content_shape', $title, $old_title);

    update_post_meta($post_id, '_mb_content_rating', $description, $old_description);
}

//hook to save the meta box data
add_action('save_post', 'tes_mb_save_data');

function tes_mb_display() {
    global $post;
//retrieve the metadata values if they exist
    $mb_content_shape = get_post_meta($post->ID, '_mb_content_shape', true);
    $mb_content_rating = get_post_meta($post->ID, '_mb_content_rating', true);

    echo ' <!-- Tutsplus Easy SEO (author: http://tech4sky.com) -->
<meta property="og:title" content="' . $mb_content_shape . '" />
<meta property="og:description" content="' . $mb_content_rating . '" />
<meta name="description" content="' . $mb_content_rating . '" />
<!-- /Tutsplus Easy SEO -->
';
}

//add the meta content to wordpress
add_action('wp_head', 'tes_mb_display');




































function stripUrls( $content ) {
	// this function shall search for any url that matches the pattern
// like:
// www.mysite.com
// http://www.mysite.com
// http://mysite.com
// those urls shall be replaced by a html link tag
 
$content_nourl = preg_replace('@((http?://)?([-\w]+\.[-\w\.]+)+\w(:\d+)?(/([-\w/_\.]*(\?\S+)?)?)*)@', '', $content);

$content_nourl = preg_replace('@((Http?://)?([-\w]+\.[-\w\.]+)+\w(:\d+)?(/([-\w/_\.]*(\?\S+)?)?)*)@', '', $content_nourl);

return $content_nourl;
 
//because you want the url to be an external link the href needs to start with 'http://'
//simply replace any occurance of 'href="www.' into 'href="http://www."
 
//$status = str_replace("href=\"www.","href=\"http://www.",$status);
}




/*

// removes all images from content

function remove_images( $content ) {
   $postOutput = preg_replace('/<img[^>]+./','', $content);
   return $postOutput;
}
add_filter( 'the_content', 'remove_images', 100 );
*/


function get_url_from_content( $content ) {
  if ( empty( $content ) ) {
    return false;
  }

  if ( preg_match( '/<a\s[^>]*?href=([\'"])(.+?)\1/is', $content, $matches ) ) {
    return esc_url_raw( $matches[2] );
  }

  return false;
}


function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    $first_img = "";
  }
  return $first_img;
}

class PageTemplater {

		/**
         * A Unique Identifier
         */
		 protected $plugin_slug;

        /**
         * A reference to an instance of this class.
         */
        private static $instance;

        /**
         * The array of templates that this plugin tracks.
         */
        protected $templates;


        /**
         * Returns an instance of this class. 
         */
        public static function get_instance() {

                if( null == self::$instance ) {
                        self::$instance = new PageTemplater();
                } 

                return self::$instance;

        } 

        /**
         * Initializes the plugin by setting filters and administration functions.
         */
        private function __construct() {

                $this->templates = array();


                // Add a filter to the attributes metabox to inject template into the cache.
                add_filter(
					'page_attributes_dropdown_pages_args',
					 array( $this, 'register_project_templates' ) 
				);


                // Add a filter to the save post to inject out template into the page cache
                add_filter(
					'wp_insert_post_data', 
					array( $this, 'register_project_templates' ) 
				);


                // Add a filter to the template include to determine if the page has our 
				// template assigned and return it's path
                add_filter(
					'template_include', 
					array( $this, 'view_project_template') 
				);


                // Add your templates to this array.
                $this->templates = array(
                       
                        'mashboard.php'     => 'Mashboard',
                        'nexus.php'     => 'Nexus',
						 'ui-id.php'     => 'ID-UI-1',
                );
				
        } 


        /**
         * Adds our template to the pages cache in order to trick WordPress
         * into thinking the template file exists where it doens't really exist.
         *
         */

        public function register_project_templates( $atts ) {

                // Create the key used for the themes cache
                $cache_key = 'page_templates-' . md5( get_theme_root() . '/' . get_stylesheet() );

                // Retrieve the cache list. 
				// If it doesn't exist, or it's empty prepare an array
				$templates = wp_get_theme()->get_page_templates();
                if ( empty( $templates ) ) {
                        $templates = array();
                } 

                // New cache, therefore remove the old one
                wp_cache_delete( $cache_key , 'themes');

                // Now add our template to the list of templates by merging our templates
                // with the existing templates array from the cache.
                $templates = array_merge( $templates, $this->templates );

                // Add the modified cache to allow WordPress to pick it up for listing
                // available templates
                wp_cache_add( $cache_key, $templates, 'themes', 1800 );

                return $atts;

        } 

        /**
         * Checks if the template is assigned to the page
         */
        public function view_project_template( $template ) {

                global $post;

                if (!isset($this->templates[get_post_meta( 
					$post->ID, '_wp_page_template', true 
				)] ) ) {
					
                        return $template;
						
                } 

                $file = plugin_dir_path(__FILE__). get_post_meta( 
					$post->ID, '_wp_page_template', true 
				);
				
                // Just to be safe, we check if the file exist first
                if( file_exists( $file ) ) {
                        return $file;
                } 
				else { echo $file; }

                return $template;

        } 


} 

add_action( 'plugins_loaded', array( 'PageTemplater', 'get_instance' ) );

?>