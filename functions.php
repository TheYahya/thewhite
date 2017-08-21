<?php


load_theme_textdomain('default', get_template_directory() . '/languages');

/**
 * load languages
 */
function setup_theme()
{
    load_theme_textdomain('default', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'setup_theme');


 // Change “Read more” link in Wordpress 4.1 to prevent scroll/remove “more-X” hash
function remove_more_link_scroll( $link ) 
{
  $link = preg_replace( '|#more-[0-9]+|', '', $link );
  return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );


/**
 * header title 
 * @param string
 * @param string 
 * @return string
 */
function wpdocs_theme_name_wp_title( $title, $sep ) 
{
    if ( is_feed() ) {
        return $title;
    }
     
    global $page, $paged;
 
    // Add the blog name
    $title .= get_bloginfo( 'name', 'display' );
 
    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title .= " $sep $site_description";
    }else
    // Add a page number if necessary:
    if ( ( $paged >= 2 || $page >= 2 ) ) {
        $title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
    }else if (is_archive()){
        $title = $sep. get_bloginfo( 'name', 'display' ). the_archive_title('', '');
    }
    else if ( is_404()){
        $title = "404". $sep. get_bloginfo( 'name', 'display' );
    }else if(is_single() || is_page()){
        $title = $sep. get_bloginfo( 'name', 'display' ). the_title(); 
    }else {
        $title .= " $sep $site_description";
    }
    return $title;
}
add_filter( 'wp_title', 'wpdocs_theme_name_wp_title', 10, 2 );

 
/**
 * theme panel page
 */
function theme_settings_page()
{
    ?>
	    <div class="wrap">
	    <h1><?php _e('theme_panel'); ?></h1>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
	<?php
}


/**
 * Add theme pannel to the wordpress dashboad menu
 */
function add_theme_menu_item()
{
	add_menu_page(__('theme_panel'), __('theme_panel'), "manage_options", "theme-panel", "theme_settings_page", null, 99);
}
add_action("admin_menu", "add_theme_menu_item");



function display_first_header_link()
{
	?>
    	<?php _e('link'); ?> : <input type="text" name="first_header_url" id="first_header_url" value="<?php echo get_option('first_header_url'); ?>" />
    	<?php _e('text'); ?> : <input type="text" name="first_header_url_text" id="first_header_url_text" value="<?php echo get_option('first_header_url_text'); ?>" />
    <?php
}

function display_second_header_link()
{
	?>
    	 <?php _e('link'); ?> : <input type="text" name="second_header_url" id="second_header_url" value="<?php echo get_option('second_header_url'); ?>" />
    	 <?php _e('text'); ?> : <input type="text" name="second_header_url_text" id="second_header_url_text" value="<?php echo get_option('second_header_url_text'); ?>" />
    <?php
}

function display_third_header_link()
{
	?>
    	 <?php _e('link'); ?> : <input type="text" name="third_header_url" id="third_header_url" value="<?php echo get_option('third_header_url'); ?>" />
    	 <?php _e('text'); ?> : <input type="text" name="third_header_url_text" id="third_header_url_text" value="<?php echo get_option('third_header_url_text'); ?>" />
    <?php
}
function display_fourth_header_link()
{
	?>
    	 <?php _e('link'); ?> : <input type="text" name="fourth_header_url" id="fourth_header_url" value="<?php echo get_option('fourth_header_url'); ?>" />
    	 <?php _e('text'); ?> : <input type="text" name="fourth_header_url_text" id="fourth_header_url_text" value="<?php echo get_option('fourth_header_url_text'); ?>" />
    <?php
}
function display_fifth_header_link()
{
	?>
    	 <?php _e('link'); ?> : <input type="text" name="fifth_header_url" id="fifth_header_url" value="<?php echo get_option('fifth_header_url'); ?>" />
    	 <?php _e('text'); ?> : <input type="text" name="fifth_header_url_text" id="fifth_header_url_text" value="<?php echo get_option('fifth_header_url_text'); ?>" />
    <?php
}
 


function display_first_footer_link()
{
	?>
    	 <?php _e('link'); ?> : <input type="text" name="first_footer_url" id="first_footer_url" value="<?php echo get_option('first_footer_url'); ?>" />
    	 <?php _e('text'); ?> : <input type="text" name="first_footer_url_text" id="first_footer_url_text" value="<?php echo get_option('first_footer_url_text'); ?>" />
    <?php
}

function display_second_footer_link()
{
	?>
    	 <?php _e('link'); ?> : <input type="text" name="second_footer_url" id="second_footer_url" value="<?php echo get_option('second_footer_url'); ?>" />
    	 <?php _e('text'); ?> : <input type="text" name="second_footer_url_text" id="second_footer_url_text" value="<?php echo get_option('second_footer_url_text'); ?>" />
    <?php
}

function display_third_footer_link()
{
	?>
    	 <?php _e('link'); ?> : <input type="text" name="third_footer_url" id="third_footer_url" value="<?php echo get_option('third_footer_url'); ?>" />
    	 <?php _e('text'); ?> : <input type="text" name="third_footer_url_text" id="third_footer_url_text" value="<?php echo get_option('third_footer_url_text'); ?>" />
    <?php
}
function display_fourth_footer_link()
{
	?>
    	 <?php _e('link'); ?> : <input type="text" name="fourth_footer_url" id="fourth_header_url" value="<?php echo get_option('fourth_footer_url'); ?>" />
    	 <?php _e('text'); ?> : <input type="text" name="fourth_footer_url_text" id="fourth_footer_url_text" value="<?php echo get_option('fourth_footer_url_text'); ?>" />
    <?php
}
function display_fifth_footer_link()
{
	?>
    	 <?php _e('link'); ?> : <input type="text" name="fifth_footer_url" id="fifth_footer_url" value="<?php echo get_option('fifth_footer_url'); ?>" />
    	 <?php _e('text'); ?> : <input type="text" name="fifth_footer_url_text" id="fifth_header_url_text" value="<?php echo get_option('fifth_footer_url_text'); ?>" />
    <?php
}
function display_sixth_footer_link()
{
	?>
    	 <?php _e('link'); ?> : <input type="text" name="sixth_footer_url" id="sixth_footer_url" value="<?php echo get_option('sixth_footer_url'); ?>" />
    	 <?php _e('text'); ?> : <input type="text" name="sixth_footer_url_text" id="sixth_header_url_text" value="<?php echo get_option('sixth_footer_url_text'); ?>" />
    <?php
}
function display_seventh_footer_link()
{
	?>
    	 <?php _e('link'); ?> : <input type="text" name="seventh_footer_url" id="seventh_footer_url" value="<?php echo get_option('seventh_footer_url'); ?>" />
    	 <?php _e('text'); ?> : <input type="text" name="seventh_footer_url_text" id="seventh_header_url_text" value="<?php echo get_option('seventh_footer_url_text'); ?>" />
    <?php
}
function display_eighth_footer_link()
{
	?>
    	 <?php _e('link'); ?> : <input type="text" name="eighth_footer_url" id="eighth_footer_url" value="<?php echo get_option('eighth_footer_url'); ?>" />
    	 <?php _e('text'); ?> : <input type="text" name="eighth_footer_url_text" id="eighth_header_url_text" value="<?php echo get_option('eighth_footer_url_text'); ?>" />
    <?php
}


/**
 * Add theme panel's field
 */
function display_theme_panel_fields()
{
	add_settings_section("section", __('all_settings'), null, "theme-options");
	
	add_settings_field("first_header_url", "#1 " . __('header_link'), "display_first_header_link", "theme-options", "section"); 
    add_settings_field("second_header_url", "#2 " . __('header_link'), "display_second_header_link", "theme-options", "section");
    add_settings_field("third_header_url", "#3 " . __('header_link'), "display_third_header_link", "theme-options", "section");
    add_settings_field("fourth_header_url", "#4 " . __('header_link'), "display_fourth_header_link", "theme-options", "section");
    add_settings_field("fifth_header_url", "#5 " . __('header_link'), "display_fifth_header_link", "theme-options", "section");

    register_setting("section", "first_header_url"); 
    register_setting("section", "first_header_url_text"); 
    
    register_setting("section", "second_header_url"); 
    register_setting("section", "second_header_url_text");
    
    register_setting("section", "third_header_url"); 
    register_setting("section", "third_header_url_text"); 
    
    register_setting("section", "fourth_header_url"); 
    register_setting("section", "fourth_header_url_text"); 
    
    register_setting("section", "fifth_header_url"); 
    register_setting("section", "fifth_header_url_text"); 
    
    add_settings_field("first_footer_url", "#1 " . __('footer_link'), "display_first_footer_link", "theme-options", "section"); 
    add_settings_field("second_footer_url", "#2 " . __('footer_link'), "display_second_footer_link", "theme-options", "section");
    add_settings_field("third_footer_url", "#3 " . __('footer_link'), "display_third_footer_link", "theme-options", "section");
    add_settings_field("fourth_footer_url", "#4 " . __('footer_link'), "display_fourth_footer_link", "theme-options", "section");
    add_settings_field("fifth_footer_url", "#5 " . __('footer_link'), "display_fifth_footer_link", "theme-options", "section");
    add_settings_field("sixth_footer_url", "#6 " . __('footer_link'), "display_sixth_footer_link", "theme-options", "section");
    add_settings_field("seventh_footer_url", "#7 " . __('footer_link'), "display_seventh_footer_link", "theme-options", "section");
    add_settings_field("eighth_footer_url", "#8 " . __('footer_link'), "display_eighth_footer_link", "theme-options", "section");

    register_setting("section", "first_footer_url"); 
    register_setting("section", "first_footer_url_text"); 
    
    register_setting("section", "second_footer_url"); 
    register_setting("section", "second_footer_url_text");
    
    register_setting("section", "third_footer_url"); 
    register_setting("section", "third_footer_url_text"); 
    
    register_setting("section", "fourth_footer_url"); 
    register_setting("section", "fourth_footer_url_text"); 
    
    register_setting("section", "fifth_footer_url"); 
    register_setting("section", "fifth_footer_url_text"); 
    
    register_setting("section", "sixth_footer_url"); 
    register_setting("section", "sixth_footer_url_text"); 
    
    register_setting("section", "seventh_footer_url"); 
    register_setting("section", "seventh_footer_url_text"); 
    
    register_setting("section", "eighth_footer_url"); 
    register_setting("section", "eighth_footer_url_text"); 
}
add_action("admin_init", "display_theme_panel_fields");

 