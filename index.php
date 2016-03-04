<?php get_header(); ?>
<div id="main">
    <div class="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
            <header class="article-header">
                <p id="title" class="post-title">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    <p id="date"> 
                        <span class="meta-data-item"><i class="demo-icon icon-calendar"></i><?php the_time('l j F  Y') ?></span>
                        <span class="meta-data-item"><i class="demo-icon icon-comment"></i><?php comments_number(); ?> </span> 
                    </p>  
                </p>
            </header>
            <section class="entry-content cf">
            <?php the_content('<p class="read-more-p">بیشتر بخوانید...</p>',false); ?>
            </section>
            <footer class="article-footer cf">
                
            </footer>
        </article>
<?php endwhile; ?> 
<?php simple_personal_paging_nav(); ?>
<?php else : ?>
<article id="post-not-found" class="hentry cf">
                                            <header class="article-header">
                                            <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                                            </header>
                                            <section class="entry-content">
                                            <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                                            </section>
                                            <footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p
												</footer>
</article>
   <?php endif; ?> 
    </div> 
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>