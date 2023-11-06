<?php
$class = $block['className'] ?? null;
if ($class == 'title-sm') {
    ?>
<h4><?=get_field('title')?></h4>
<?php
} else {
    ?>
<h3><?=get_field('title')?></h3>
<?php
}
$pos = 1;
while (have_rows('results')) {
    the_row();
    ?>
<div class="row bg-tint-<?=$pos?> mx-2">
    <?php
if (count(get_field('results')) > 1) {
    ?>
    <div class="col-1 text-right"><?=$pos?></div>
    <div class="col-8 col-md-8">
        <?=get_sub_field('name')?>
    </div>
    <?php
} else {
    ?>
    <div class="col-9 col-md-9">
        <?=get_sub_field('name')?>
    </div>
    <?php
}
    ?>
    <div class="col-3"><?=get_sub_field('time')?>
    </div>
</div>
<?php
        $pos++;
}
?>