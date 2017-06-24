<?php get_header(); ?>
<div class="container"> 

<?php 
$myposts = get_posts(array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'nopaging' => true, 
            ));
$the_year = null;
$the_month = null;
$first_year = true;
$first_month = true; 
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    <?php 
    if ($the_year != get_the_date('Y')){
        $the_year = get_the_date('Y');
        // echo (!$first_year) ? '<div class="date-year-divider"><span>…</span></div>' : '';
        echo ($first_year) ? 
            '<div class="date-year-divider"><span>' . $the_year . '</span></div>' : 
            '<div class="date-year-divider"><span>' . $the_year . '</span></div>';
        
        $first_year = false;
        //echo '<span class="date date-year">' . $the_year . '</span>';
    }
    ?>
    <article>
        <span class="date date-month-day"><?=the_date('d/m')?></span><h3 class="archive__post-title"><a href="<?php the_permalink() ?>"><?=the_title();?></a></h3>
    </article>
<?php 
endforeach; 
wp_reset_postdata();
?>
</div> 
<?php get_footer(); ?>