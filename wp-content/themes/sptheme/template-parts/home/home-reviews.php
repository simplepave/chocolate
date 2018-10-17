<?php

/**
 *
 */

$args = [
    'number'  => 3,
    'post_id' => 83,
    'status'  => 'approve',
];

$comments = get_comments($args);
?>
    <div class="container">
        <div class="row">
            <div class="main_reviews">
                <div class="head_block">отзывы о нас</div>
                <ul>
<?php foreach ($comments as $comment) { ?>
                    <li>
                        <div class="row_flex">
                            <span><?php echo $comment->comment_author; ?></span>
                            <ul>
                                <li><a onclick="return false" href="#"></a></li>
                                <li><a onclick="return false" href="#"></a></li>
                                <li><a onclick="return false" href="#"></a></li>
                                <li><a onclick="return false" href="#"></a></li>
                                <li><a onclick="return false" href="#"></a></li>
                            </ul>
                        </div>
                        <p><?php echo $comment->comment_content; ?></p>
                    </li>
<?php } ?>
                </ul>
            </div>
        </div>
    </div>