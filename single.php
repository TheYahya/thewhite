<?php get_header(); ?> 
<div class="container">
    <div class="content">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="post-date-divider"><span></i><?php the_time('l j F  Y') ?></span></div>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="post-title">
                <?php the_title(); ?>
            </h1> 
            <p class="comments-number"><?php comments_number(); ?></p>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php comments_template(); ?>
    <?php endwhile; ?>
</div><!--.container-->
<?php get_footer(); ?>
