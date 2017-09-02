<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title( '&raquo;', true, '' ); ?></title>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link href="<?php echo get_bloginfo('rss2_url');  ?>" title="<?php bloginfo('name'); ?>" type="application/rss+xml" rel="alternate">
  <?php wp_head(); ?>
</head>
<body>
  <div class="wrapper">
    <header class="header">
      <div id="nav-wrapper">
        <section class="container">
          <nav>
            <ul>
                <?php 
                // show pages in header!
                $pages = get_pages(array(
                  'offset'       => 0,
                  'post_type'    => 'page',
                  'post_status'  => 'publish',
                )); 
                foreach($pages as $page) { ?>
                  <li class="brackets"><a href="<?=get_permalink($page->ID);?>"><?=$page->post_title?></a></li>
                <?php } ?>

                <?php
                // header links from Theme panel
                $first_header_link = get_option('first_header_url');
                $first_header_link_text = get_option('first_header_url_text');
                if($first_header_link != null && $first_header_link_text != null){?>
                <li class="brackets"><a href="<?=$first_header_link?>"?><?=$first_header_link_text?></a></li>
                <?}

                $second_header_url = get_option('second_header_url');
                $second_header_url_text = get_option('second_header_url_text');
                if($second_header_url != null && $second_header_url_text != null){?>
                <li class="brackets"><a href="<?=$second_header_url?>"><?=$second_header_url_text?></a></li> 
                <?}

                $third_header_url = get_option('third_header_url');
                $third_header_url_text = get_option('third_header_url_text');
                if($third_header_url != null && $third_header_url_text != null){?>
                <li class="brackets"><a href="<?=$third_header_url?>"><?=$third_header_url_text?></a></li>
                <?}

                $fourth_header_url = get_option('fourth_header_url');
                $fourth_header_url_text = get_option('fourth_header_url_text');
                if($fourth_header_url != null && $fourth_header_url_text != null){?>
                <li class="brackets"><a href="<?=$fourth_header_url?>"><?=$fourth_header_url_text?></a></li>
                <?}

                $fifth_header_url = get_option('fifth_header_url');
                $fifth_header_url_text = get_option('fifth_header_url_text');
                if($fifth_header_url != null && $fifth_header_url_text != null){?>
                <li class="brackets"><a href="<?=$fifth_header_url?>"><?=$fifth_header_url_text?></a></li>
                <?}
              ?>
            </ul>
          </nav>
        </section><!--/.container-->
      </div><!--/#nav-wrapper-->
    <div id="blog-title">
        <h1 class="brackets"><a href="<?php echo home_url(); ?>"><? bloginfo('name');?></a><h1>
        <h2><? bloginfo('description');?></h2> 
    </div><!--/#blog-title-->
  </header><!--/.header-->