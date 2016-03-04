<?php get_header(); ?> 
<div id="main">
    <div class="content">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<p id="title" class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
<div class="entry-content">
        <?php the_content(); ?>
</div>
</article>
<?php comments_template(); ?>

<?php endwhile; ?>
        
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>
