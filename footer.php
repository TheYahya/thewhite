<footer id="footer">
<div class="container">
<div id="footer-divider">
</div>
<br>
<ul>
<?php       
// header links from Theme panel 
$first_footer_link = get_option('first_footer_url');
$first_footer_link_text = get_option('first_footer_url_text');
if($first_footer_link != null && $first_footer_link_text != null){ ?>
    <li class="brackets"><a href="<?=$first_footer_link?>"><?=$first_footer_link_text?></a></li>
<?php }

$second_footer_link = get_option('second_footer_url');
$second_footer_link_text = get_option('second_footer_url_text');
if($second_footer_link != null && $second_footer_link_text != null){ ?>
    <li class="brackets"><a href="<?=$second_footer_link?>"><?=$second_footer_link_text?></a></li>
<?php }

$third_footer_link = get_option('third_footer_url');
$third_footer_link_text = get_option('third_footer_url_text');
if($third_footer_link != null && $third_footer_link_text != null){ ?>
    <li class="brackets"><a href="<?=$third_footer_link?>"><?=$third_footer_link_text?></a></li>
<?php }

$fourth_footer_link = get_option('fourth_footer_url');
$fourth_footer_link_text = get_option('fourth_footer_url_text');
if($fourth_footer_link != null && $fourth_footer_link_text != null){ ?>
    <li class="brackets"><a href="<?=$fourth_footer_link?>"><?=$fourth_footer_link_text?></a></li>
<?php }

$fifth_footer_link = get_option('fifth_footer_url');
$fifth_footer_link_text = get_option('fifth_footer_url_text');
if($fifth_footer_link != null && $fifth_footer_link_text != null){ ?>
    <li class="brackets"><a href="<?=$fifth_footer_link?>"><?=$fifth_footer_link_text?></a></li>
<?php }

$sixth_footer_link = get_option('sixth_footer_url');
$sixth_footer_link_text = get_option('sixth_footer_url_text');
if($sixth_footer_link != null && $sixth_footer_link_text != null){ ?>
    <li class="brackets"><a href="<?=$sixth_footer_link?>"><?=$sixth_footer_link_text?></a></li>
<?php }

$seventh_footer_link = get_option('seventh_footer_url');
$seventh_footer_link_text = get_option('seventh_footer_url_text');
if($seventh_footer_link != null && $seventh_footer_link_text != null){ ?>
    <li class="brackets"><a href="<?=$seventh_footer_link?>"><?=$seventh_footer_link_text?></a></li>
<?php }

$eighth_footer_link = get_option('eighth_footer_url');
$eighth_footer_link_text = get_option('eighth_footer_url_text');
if($eighth_footer_link != null && $eighth_footer_link_text != null){ ?>
    <li class="brackets"><a href="<?=$eighth_footer_link?>"><?=$eighth_footer_link_text?></a></li>
<?php } ?>
</ul>
<br><br><br>
</div>
</footer> 
<?php wp_footer(); ?>
</body>
</html>