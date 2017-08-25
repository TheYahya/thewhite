<?php get_header(); ?>
<div class="container">
    <div class="notf">
        <h1><?php _e('Error 404'); ?></h1>
        <p><?php _e('Page not found!');?></p>
        <p><a href="<?php echo home_url(); ?>"><?php _e('Home page');?></a></p>
    </div> 
<?php get_footer(); ?>