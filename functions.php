<?php
 // Change “Read more” link in Wordpress 4.1 to prevent scroll/remove “more-X” hash
function remove_more_link_scroll( $link ) {
  $link = preg_replace( '|#more-[0-9]+|', '', $link );
  return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

//  Page Navi 
function simple_personal_paging_nav() {
	global $wp_query;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<nav class="navigation paging-navigation" role="navigation"> 
		<div class="nav-links">
			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link(' نوشته‌های کهنه‌تر  <span class="meta-nav">&larr;</span>'); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link(' <span class="meta-nav">&rarr;</span> نوشته‌های تازه‌تر  '); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
} 


/**********************************************************/
function wpdocs_theme_name_wp_title( $title, $sep ) {
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
 * add an span ofter any item of category list.
 */
add_filter ( 'wp_list_categories', 'span_before_link_list_categories' );
function span_before_link_list_categories( $list ) {
$list = str_replace('</a>','</a>',$list);
return $list;
}


 
function theme_settings_page()
{
    ?>
	    <div class="wrap">
	    <h1>Theme Panel</h1>
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

function add_theme_menu_item()
{
	add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

function display_first_header_link()
{
	?>
    	لینک : <input type="text" name="first_header_url" id="first_header_url" value="<?php echo get_option('first_header_url'); ?>" />
    	متن : <input type="text" name="first_header_url_text" id="first_header_url_text" value="<?php echo get_option('first_header_url_text'); ?>" />
    <?php
}

function display_second_header_link()
{
	?>
    	لینک : <input type="text" name="second_header_url" id="second_header_url" value="<?php echo get_option('second_header_url'); ?>" />
    	متن : <input type="text" name="second_header_url_text" id="second_header_url_text" value="<?php echo get_option('second_header_url_text'); ?>" />
    <?php
}

function display_third_header_link()
{
	?>
    	لینک : <input type="text" name="third_header_url" id="third_header_url" value="<?php echo get_option('third_header_url'); ?>" />
    	متن : <input type="text" name="third_header_url_text" id="third_header_url_text" value="<?php echo get_option('third_header_url_text'); ?>" />
    <?php
}
function display_fourth_header_link()
{
	?>
    	لینک : <input type="text" name="fourth_header_url" id="fourth_header_url" value="<?php echo get_option('fourth_header_url'); ?>" />
    	متن : <input type="text" name="fourth_header_url_text" id="fourth_header_url_text" value="<?php echo get_option('fourth_header_url_text'); ?>" />
    <?php
}
function display_fifth_header_link()
{
	?>
    	لینک : <input type="text" name="fifth_header_url" id="fifth_header_url" value="<?php echo get_option('fifth_header_url'); ?>" />
    	متن : <input type="text" name="fifth_header_url_text" id="fifth_header_url_text" value="<?php echo get_option('fifth_header_url_text'); ?>" />
    <?php
}
 


function display_first_footer_link()
{
	?>
    	لینک : <input type="text" name="first_footer_url" id="first_footer_url" value="<?php echo get_option('first_footer_url'); ?>" />
    	متن : <input type="text" name="first_footer_url_text" id="first_footer_url_text" value="<?php echo get_option('first_footer_url_text'); ?>" />
    <?php
}

function display_second_footer_link()
{
	?>
    	لینک : <input type="text" name="second_footer_url" id="second_footer_url" value="<?php echo get_option('second_footer_url'); ?>" />
    	متن : <input type="text" name="second_footer_url_text" id="second_footer_url_text" value="<?php echo get_option('second_footer_url_text'); ?>" />
    <?php
}

function display_third_footer_link()
{
	?>
    	لینک : <input type="text" name="third_footer_url" id="third_footer_url" value="<?php echo get_option('third_footer_url'); ?>" />
    	متن : <input type="text" name="third_footer_url_text" id="third_footer_url_text" value="<?php echo get_option('third_footer_url_text'); ?>" />
    <?php
}
function display_fourth_footer_link()
{
	?>
    	لینک : <input type="text" name="fourth_footer_url" id="fourth_header_url" value="<?php echo get_option('fourth_footer_url'); ?>" />
    	متن : <input type="text" name="fourth_footer_url_text" id="fourth_footer_url_text" value="<?php echo get_option('fourth_footer_url_text'); ?>" />
    <?php
}
function display_fifth_footer_link()
{
	?>
    	لینک : <input type="text" name="fifth_footer_url" id="fifth_footer_url" value="<?php echo get_option('fifth_footer_url'); ?>" />
    	متن : <input type="text" name="fifth_footer_url_text" id="fifth_header_url_text" value="<?php echo get_option('fifth_footer_url_text'); ?>" />
    <?php
}
function display_sixth_footer_link()
{
	?>
    	لینک : <input type="text" name="sixth_footer_url" id="sixth_footer_url" value="<?php echo get_option('sixth_footer_url'); ?>" />
    	متن : <input type="text" name="sixth_footer_url_text" id="sixth_header_url_text" value="<?php echo get_option('sixth_footer_url_text'); ?>" />
    <?php
}
function display_seventh_footer_link()
{
	?>
    	لینک : <input type="text" name="seventh_footer_url" id="seventh_footer_url" value="<?php echo get_option('seventh_footer_url'); ?>" />
    	متن : <input type="text" name="seventh_footer_url_text" id="seventh_header_url_text" value="<?php echo get_option('seventh_footer_url_text'); ?>" />
    <?php
}
function display_eighth_footer_link()
{
	?>
    	لینک : <input type="text" name="eighth_footer_url" id="eighth_footer_url" value="<?php echo get_option('eighth_footer_url'); ?>" />
    	متن : <input type="text" name="eighth_footer_url_text" id="eighth_header_url_text" value="<?php echo get_option('eighth_footer_url_text'); ?>" />
    <?php
}

function display_theme_panel_fields()
{
	add_settings_section("section", "All Settings", null, "theme-options");
	
	add_settings_field("first_header_url", "#1 header link", "display_first_header_link", "theme-options", "section"); 
    add_settings_field("second_header_url", "#2 header link", "display_second_header_link", "theme-options", "section");
    add_settings_field("third_header_url", "#3 header link", "display_third_header_link", "theme-options", "section");
    add_settings_field("fourth_header_url", "#4 header link", "display_fourth_header_link", "theme-options", "section");
    add_settings_field("fifth_header_url", "#5 header link", "display_fifth_header_link", "theme-options", "section");

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
    
    
    
    add_settings_field("first_footer_url", "#1 footer link", "display_first_footer_link", "theme-options", "section"); 
    add_settings_field("second_footer_url", "#2 footer link", "display_second_footer_link", "theme-options", "section");
    add_settings_field("third_footer_url", "#3 footer link", "display_third_footer_link", "theme-options", "section");
    add_settings_field("fourth_footer_url", "#4 footer link", "display_fourth_footer_link", "theme-options", "section");
    add_settings_field("fifth_footer_url", "#5 footer link", "display_fifth_footer_link", "theme-options", "section");
    add_settings_field("sixth_footer_url", "#6 footer link", "display_sixth_footer_link", "theme-options", "section");
    add_settings_field("seventh_footer_url", "#7 footer link", "display_seventh_footer_link", "theme-options", "section");
    add_settings_field("eighth_footer_url", "#8 footer link", "display_eighth_footer_link", "theme-options", "section");

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

 