<?php

/**
 * News widget
 */

$posts_per_page = 13;

$args = [
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => $posts_per_page,
];

$query = new WP_Query($args);
wp_reset_query();
?>
    <div class="container">
        <div class="row">
            <div class="main_news">
                <div class="head_block">новости</div>
                <div class="news_slider owl-carousel">
<?php while ($query->have_posts()) { $query->the_post(); ?>
                    <div class="item">
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Подробнее...</a>
                    </div>
<?php } wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>