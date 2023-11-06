<?php
$classes = $block['className'] ?? 'py-5';
?>
<section class="buttons <?=$classes?>">
    <div class="container-xl d-flex justify-content-around">
        <?php
    while(have_rows('buttons')) {
        the_row();
        $s = get_sub_field('style');
        if (get_sub_field('type') == 'Link') {
            $l = get_sub_field('link');
            ?>
        <a href="<?=$l['url']?>"
            class="btn btn-<?=$s?> btn--has-arrow"
            target="<?=$l['target']?>"><?=$l['title']?></a>
        <?php
        } else {
            $l = get_sub_field('file');
            ?>
        <a href="<?=$l['url']?>"
            class="btn btn-<?=$s?>"
            download=""><?=$l['title']?> &nbsp;<i
                class="fa-solid fa-file-pdf"></i></a>
        <?php
        }
    }
?>
    </div>
</section>