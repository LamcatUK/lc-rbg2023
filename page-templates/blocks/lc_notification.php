<?php
$news = array();
if (get_field('notification', 'options') ?? null) {
    $news[] = get_field('notification', 'options');
    /*    ?>
    <div class="notification">
        Latest: <a
            href="<?=get_permalink(get_field('notification', 'options'))?>"><?=get_the_title(get_field('notification', 'options'))?></a>
    </div>
    <?php
    */
}

$news = get_posts(array( 'numberposts' => 4, 'fields' => 'ids' ));
?>

<div class="notification">
    <div class="ticker-wrap">
        <div class="ticker-heading">Latest:</div>
        <div class="ticker">
            <?php
            foreach ($news as $n) {
                ?>
            <a href="<?=get_the_permalink($n)?>"
                class="ticker__item"><?=get_the_title($n)?></a>
            <?php
            }
?>
        </div>
    </div>
</div>