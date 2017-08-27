<?php get_header(); ?> 
<div class="container">
    <div class="content">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 class="page-title">
            <?=the_title()?>
        </h1>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        </article>
    <?php comments_template(); ?>
    <?php endwhile; ?>
</div><!--/.container--> 
<?php get_footer(); ?>
