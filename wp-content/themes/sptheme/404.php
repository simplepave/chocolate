<?php

/**
 * 404 page
 */

set_query_var('var_product_id', 'all');

get_header(); ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="bread-crumbs">
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo get_the_title(get_option('page_on_front')); ?></a></li>
                    </ul>
                </div>
                <div class="services">
                    <div class="head_block">Ой! Страница не найдена.</div>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/shop/shop', 'gallery'); ?>
        <?php get_template_part('template-parts/mail/form', 'feedback'); ?>
    </div>
<?php get_footer();