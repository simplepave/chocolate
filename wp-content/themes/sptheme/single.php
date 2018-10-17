<?php

/**
 *
 */

$post = get_post();
set_query_var('var_product_id', 'all');

get_header();
?>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="content_row row_flex">
                    <div class="left_menu">
                        <?php get_template_part('template-parts/shop/shop', 'products'); ?>
                    </div>
                    <div class="right_colum">
                        <div class="bread-crumbs">
                            <ul>
                                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo get_the_title(get_option('page_on_front')); ?></a></li>
                                <li class="active"><a href="<?php echo esc_url(home_url($post->post_name . '/')); ?>"><?php echo $post->post_title; ?></a></li>
                            </ul>
                        </div>
                        <div class="company">
                            <div class="head_block"><?php echo $post->post_title; ?></div>
                            <p><?php echo $post->post_content; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/shop/shop', 'gallery'); ?>
    </div>
<?php get_footer();