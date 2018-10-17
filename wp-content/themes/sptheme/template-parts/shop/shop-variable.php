<?php

/**
 * variable
 */

if (isset($var_product_id)) :
    $product_ids = $var_product_id == 'all'? shop_product_data('ids'): [$var_product_id => 'Персонализация текстиля'];

foreach ($product_ids as $product_id => $product_title) :
    $product_variable = new  WC_Product_Variable($product_id);
    $available_variations = $product_variable->get_available_variations();
    $attributes = $product_variable->get_attributes();
?>
    <div class="table_printing">
        <div class="head_print"><?php echo $product_title; ?></div>
        <table>
            <tr>
<?php
    foreach ($attributes as $name => $options) {
        $attr_name = $options['name'];
        if (0 === strpos($attr_name, 'pa_'))
            $attr_name = wc_attribute_label($attr_name);
?>
                <th><?php echo $attr_name; ?></th>
<?php } ?>
                <th>Цена (руб.)</th>
            </tr>
<?php
    foreach ($available_variations as $prod_variation) {
        $post_id = $prod_variation['variation_id'];
        $post_object = get_post($post_id);
?>
            <tr>
<?php
        foreach ($prod_variation['attributes'] as $attr_name => $attr_value) {
            if (strpos($attr_name, '_pa_')){
                $attr_name = substr($attr_name, 10);
                $attr = get_term_by('slug', $attr_value, $attr_name);
                $attr_value = $attr->name;
            }
?>
                <td><?php echo $attr_value; ?></td>
<?php } ?>
                <td><?php echo get_post_meta($post_object->ID, '_price', true) . '/шт.'; ?></td>
            </tr>
<?php } ?>
        </table>
    </div>
<?php
endforeach;
endif;