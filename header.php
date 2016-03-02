<html>
    <head>
        <title><?php echo wp_title(' | ','right'); ?></title>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link href="<?php echo home_url(); ?>/wp-content/themes/thewhite/fonts/fonticon/css/fontello.css" rel="stylesheet">
        <link href="<?php echo get_bloginfo('rss2_url');  ?>" title="<?php bloginfo('name'); ?>" type="application/rss+xml" rel="alternate">
        <?php wp_head(); ?> 
    </head>
    <body>  
        <div class="wrapper" dir="rtl"> 
            <div class="header" > 
                   <p class="blog-name"><a href="<?php echo home_url(); ?>"><span><?php bloginfo('name'); ?></span></a> <?php bloginfo('description'); ?></p> 
                <p class="header-links"><span> </span> 
                   
                   
                    <?php
                        $first_header_link = get_option('first_header_url');
                        $first_header_link_text = get_option('first_header_url_text');
                        if($first_header_link != null && $first_header_link_text != null){
                            echo '<a href="'. $first_header_link. '"> '.$first_header_link_text. ' </a>';
                        }

                        $second_header_url = get_option('second_header_url');
                        $second_header_url_text = get_option('second_header_url_text');
                        if($second_header_url != null && $second_header_url_text != null){
                            echo '<a href="'. $second_header_url. '"> ' .$second_header_url_text. ' </a>';
                        }

                        $third_header_url = get_option('third_header_url');
                        $third_header_url_text = get_option('third_header_url_text');
                        if($third_header_url != null && $third_header_url_text != null){
                            echo '<a href="'. $third_header_url. '"> '.$third_header_url_text. ' </a>';
                        }

                        $fourth_header_url = get_option('fourth_header_url');
                        $fourth_header_url_text = get_option('fourth_header_url_text');
                        if($fourth_header_url != null && $fourth_header_url_text != null){
                            echo '<a href="'. $fourth_header_url. '"> '.$fourth_header_url_text. ' </a>';
                        }

                        $fifth_header_url = get_option('fifth_header_url');
                        $fifth_header_url_text = get_option('fifth_header_url_text');
                        if($fifth_header_url != null && $fifth_header_url_text != null){
                            echo '<a href="'. $fifth_header_url. '"> '.$fifth_header_url_text. ' </a>';
                        }
                    ?>
                    
                </p>
            </div>