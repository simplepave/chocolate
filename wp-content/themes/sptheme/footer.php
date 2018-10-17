<?php

/**
 * Footer
 */

$url_arr = parse_url(get_option('siteurl'));
$url_arr = array_reverse(explode('.', $url_arr['host']));
$name_host = ucfirst($url_arr[1] . '.' . $url_arr[0]);
?>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="row_flex">
                        <div class="item_footer">
                            <div class="logo_block">
                                <a class="logo" href="<?php echo esc_url(home_url('/')); ?>"></a>
                                <p class="text_logo"><?php bloginfo('description'); ?></p>
                            </div>
                            <p class="copi">&copy; <?php echo '2018' . (('2018' != date('Y')) ? '-' . date('Y') : '');?> <?php echo $name_host; ?></p>
                            <p class="fot_text">Все права защищены. Использованеи материалов с сайта возможно только в случае указания прямой ссылки на источник.</p>
                        </div>
                        <div class="header_phone">
                            <a class="link_phone" href="tel:<?php echo href_tel(get_option('phone', '')); ?>"><?php echo esc_html(get_option('phone', '')); ?></a>
                            <a class="mail_phone" href="mailto:<?php echo esc_html(get_option('admin_email', '')); ?>"><?php echo esc_html(get_option('admin_email', '')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<?php wp_footer(); ?>
    </body>
</html>
