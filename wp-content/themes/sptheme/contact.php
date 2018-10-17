<?php

/**
 * Template name: Контакты
 */

$post = get_post();

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
                        <div class="contacts">
                            <div class="head_block"><?php echo $post->post_title; ?></div>
                            <div class="map" id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="contacts_row">
                    <div class="address_contacts"><?php echo esc_html(get_option('address', '')); ?></div>
                    <a class="phone_contacts" href="tel:<?php echo href_tel(get_option('phone', '' )); ?>"><?php echo esc_html(get_option('phone', '')); ?></a>
                    <a class="main_contacts" href="mailto:<?php echo esc_html(get_option('admin_email', '')); ?>"><?php echo esc_html(get_option('admin_email', '')); ?></a>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/mail/form', 'feedback'); ?>
    </div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXGGDEO3zua7UkiieoIIkiOVraufA-ZOA&callback=initMap"></script>
<script type="text/javascript">
function initMap() {
    var centerLatLng = new google.maps.LatLng(<?php echo get_option('google_maps_lat', ''); ?>, <?php echo get_option('google_maps_lng', ''); ?>);

    var mapOptions = {
        center: centerLatLng,
        zoom: 16
    };

    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    var marker = new google.maps.Marker({
        position: centerLatLng,
        map: map,
        title: "<?php echo get_option('address', ''); ?>",
        icon: "http://chocolate.local/wp-content/uploads/2018/10/marker.png"
    });
}

google.maps.event.addDomListener(window, "load", initMap);
</script>
<?php get_footer();