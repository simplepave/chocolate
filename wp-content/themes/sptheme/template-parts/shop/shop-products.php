<?php

/**
 * product
 */

$is_services = isset($is_services)? true: false;
$query = shop_product_data();
$shop_data = shop_data();

if ($query) {
?>
    <ul>
<?php foreach($query as $product) {
    $card_url = esc_url(home_url($shop_data->post_name . '/' . $product->post_name . '/'));
?>
        <li>
            <?php if ($is_services) :?><div><?php endif; ?>
            <a href="<?php echo $card_url; ?>"><?php echo $product->post_title; ?></a>
            <?php if ($is_services) :?></div><?php endif; ?>
        </li>
<?php } ?>
    </ul>
<?php } ?>