<?php

/**
 *
 */

$category = get_categories([
        'taxonomy'   => 'product_cat',
        'include'    => '19',
    ])[0];

if (!$category)
    page_404();

set_query_var('is_services', true);
$shop_data = shop_data();

get_header();
?>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="bread-crumbs">
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo get_the_title(get_option('page_on_front')); ?></a></li>
                        <li class="active"><a href="<?php echo esc_url(home_url($shop_data->post_name . '/')); ?>"><?php echo $shop_data->post_title; ?></a></li>
                    </ul>
                </div>
                <div class="services">
                    <div class="head_block"><?php echo $category->name; ?></div>
                    <?php get_template_part('template-parts/shop/shop', 'products'); ?>
                    <p><?php echo $shop_data->post_content; ?></p>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/mail/form', 'feedback'); ?>
    </div>
<?php get_footer(); ?>