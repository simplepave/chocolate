<?php

/**
 * gallery
 */

if (isset($var_product_id)) :
    $product_ids = $var_product_id == 'all'? shop_product_data('ids'): [$var_product_id => ''];

$num = 0;
ob_start();
    foreach ($product_ids as $product_id => $product_title) {
        $product_image_gallery = get_post_meta($product_id, '_product_image_gallery')[0];

        if ($product_image_gallery) {
            $product_image_array = explode(',', $product_image_gallery);

            foreach ($product_image_array as $img_id) {
                if ($num > 8) break 2; $num++;
                $img_full = wp_get_attachment_image_src($img_id, 'full')[0];
?>
            <li>
                <div class="img">
                    <a onclick="return false" href="<?php echo $img_full; ?>"><img src="<?php echo $img_full; ?>" alt=""></a>
                </div>
                <p><?php image_title($img_id); ?></p>
            </li>
<?php }}}
$gallery = ob_get_clean();
?>
    <div class="container">
        <div class="row">
            <div class="last_work">
                <div class="head_block">последние работы</div>
                <ul>
                    <?php echo $gallery; ?>
                </ul>
            </div>
        </div>
    </div>
<?php
endif;