<div class="footer"> 
   <div class="footerWrapper">
   <div class="footer-item footer-item-right">
        
        <ul class="cat">
            <p id="topic"><i class="demo-icon icon-tags"> </i><?php _e('Categories'); ?></p>
            <?php wp_list_categories('title_li='); ?>
        </ul>
    </div>
    <div class="footer-item footer-item-left"> 
        <ul class="cat">
           <p id="topic"><i class="demo-icon icon-globe"> </i> در وب</p>
           <?php
                
                $first_footer_link = get_option('first_footer_url');
                $first_footer_link_text = get_option('first_footer_url_text');
                if($first_footer_link != null && $first_footer_link_text != null){
                    echo '<li class="cat-item"><a href="'. $first_footer_link. '"> '.$first_footer_link_text. ' </a></li>';
                }

                
                $second_footer_link = get_option('second_footer_url');
                $second_footer_link_text = get_option('second_footer_url_text');
                if($second_footer_link != null && $second_footer_link_text != null){
                    echo '<li class="cat-item"><a href="'. $second_footer_link. '"> '.$second_footer_link_text. ' </a></li>';
                }


                
                $third_footer_link = get_option('third_footer_url');
                $third_footer_link_text = get_option('third_footer_url_text');
                if($third_footer_link != null && $third_footer_link_text != null){
                    echo '<li class="cat-item"><a href="'. $third_footer_link. '"> '.$third_footer_link_text. ' </a></li>';
                }


                
                $fourth_footer_link = get_option('fourth_footer_url');
                $fourth_footer_link_text = get_option('fourth_footer_url_text');
                if($fourth_footer_link != null && $fourth_footer_link_text != null){
                    echo '<li class="cat-item"><a href="'. $fourth_footer_link. '"> '.$fourth_footer_link_text. ' </a></li>';
                }

                
                $fifth_footer_link = get_option('fifth_footer_url');
                $fifth_footer_link_text = get_option('fifth_footer_url_text');
                if($fifth_footer_link != null && $fifth_footer_link_text != null){
                    echo '<li class="cat-item"><a href="'. $fifth_footer_link. '"> '.$fifth_footer_link_text. ' </a></li>';
                }

                
                $sixth_footer_link = get_option('sixth_footer_url');
                $sixth_footer_link_text = get_option('sixth_footer_url_text');
                if($sixthfirst_footer_link != null && $sixth_footer_link_text != null){
                    echo '<li class="cat-item"><a href="'. $sixth_footer_link. '"> '.$sixth_footer_link_text. ' </a></li>';
                }

                
                $seventh_footer_link = get_option('seventh_footer_url');
                $seventh_footer_link_text = get_option('seventh_footer_url_text');
                if($seventh_footer_link != null && $seventh_footer_link_text != null){
                    echo '<li class="cat-item"><a href="'. $seventh_footer_link. '"> '.$seventh_footer_link_text. ' </a></li>';
                }

                
                $eighth_footer_link = get_option('eighth_footer_url');
                $eighth_footer_link_text = get_option('eighth_footer_url_text');
                if($eighth_footer_link != null && $eighth_footer_link_text != null){
                    echo '<li class="cat-item"><a href="'. $eighth_footer_link. '"> '.$eighth_footer_link_text. ' </a><span> | </span></li>';
                }
           ?> 
        </ul>
    </div>  
    </div>
</div>
<div class="copyright-stuff"> 
    <p>1394-1395</p>
    <p>طراحی شده در ایران توسط: <a href="http://ysarbabi.ir"> یحیی صیاداربابی </a>.</p> 
    <p>مطالب وبلاگ تحت لیسانس <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/">Creative Commons</a>
    منتشر می‌شوند.</p>
</div>
</div>
</body>
</html>