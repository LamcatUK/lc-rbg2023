<?php
$classes = $block['className'] ?? null;
?>
<section class="callout <?=$classes?>">
    <div class="container-xl">
        <div class="callout__inner">
            <h2 class="text-center">
                <?=get_field('title')?>
            </h2>
            <div><?=get_field('content')?></div>
        </div>
    </div>
</section>