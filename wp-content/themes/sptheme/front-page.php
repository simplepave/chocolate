<?php

/**
 * Front page
 */

set_query_var('var_product_id', 'all');

get_header();
?>
    <div class="content">
<?php
get_template_part('template-parts/home/home', 'content');
get_template_part('template-parts/shop/shop', 'gallery');
get_template_part('template-parts/news/news', 'widget');
get_template_part('template-parts/home/home', 'reviews');
get_template_part('template-parts/home/home', 'popup');
?>
    </div>
<?php
get_footer();