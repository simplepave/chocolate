<?php

/**
 *
 */

$product = product_data();

if (!$product)
    page_404();

$shop_data = shop_data();
set_query_var('var_product_id', $product->ID);
$product_image_full = wp_get_attachment_image_src(get_post_thumbnail_id($product->ID), 'full')[0];

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
                                <li><a href="<?php echo esc_url(home_url($shop_data->post_name . '/')); ?>"><?php echo $shop_data->post_title; ?></a></li>
                                <li class="active"><a href="<?php echo esc_url(home_url($shop_data->post_name.'/'.$product->post_name.'/')); ?>"><?php echo $product->post_title; ?></a></li>
                            </ul>
                        </div>
                        <div class="digital_printing">
                            <div class="head_block"><?php echo $product->post_title; ?></div>
                            <div class="row_flex">
                                <div class="digital_img"><img src="<?php echo $product_image_full; ?>" alt=""></div>
                                <div class="digital_text">
                                    <p><?php echo $product->post_excerpt; ?></p>
                                </div>
                            </div>
                            <div class="to_order_print">
                                <p><?php echo $product->post_content; ?></p>
                                <a class="to_order_button popup" href="#write_popup">заказать</a>
                            </div>
                            <?php get_template_part('template-parts/shop/shop', 'variable'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/shop/shop', 'gallery'); ?>
        <?php get_template_part('template-parts/mail/form', 'feedback'); ?>
    </div>
    <div id="write_popup" class="write_popup">
        <div class="head_popup">заказать</div>
        <form id="woo-order-form" action="" method="post">
            <input name="author" class="input_popup" type="text" placeholder="Имя" required="required">
            <input name="email" class="input_popup" type="text" placeholder="E-mail" required="required">
            <textarea name="comment" class="textarea_popup" placeholder="Сообщение"></textarea>
            <input type='hidden' name='product_id' value='<?php echo $product->ID; ?>' />
            <div class="align_submit"><input class="submit_popup" type="submit" value="отправить"></div>
        </form>
    </div>
<?php get_footer(); ?>