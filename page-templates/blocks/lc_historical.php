<?php
$classes = $blockName['className'] ?? null;
$event = get_field('event');
$gender = get_field('gender');
$field = strtolower($event . '_' . $gender);
$file = get_field($field, 'options');
$filedir = get_attached_file($file['id']);

$data = @file($filedir);

$hideYear = get_field('hide_year') ?? null ? 'd-wp-md-none' : '';

?>
<section class="historical">
    <div class="row">
        <div class="col-md-10 offset-md-2">
            <div class="h4"><?=$gender?></div>
        </div>
    </div>
    <?php

$currYear = '';
$first = true;
foreach ($data as $line) {
    $r = explode(",", $line);
    if ($r[0] != $currYear) {
        ?>
    <div class="row mx-0 mb-2 pb-2 border-bottom">
        <div class="col-12 col-md-2 px-0 h4">
            <div class="<?=$hideYear?>">
                <?=$r[0]?>
            </div>
        </div>
        <div class="col-12 col-md-10">
            <?php
    }
    ?>
            <div class="row bg-tint-<?=$r[1]?>">
                <div class="col-1"><?=$r[1]?></div>
                <div class="col-7 col-md-8"><?=$r[2]?></div>
                <div class="col-3"><?=$r[3]?></div>
            </div>
            <?php
            if ($r[1] == 3) {
                ?>
        </div>
    </div>
    <?php
            }

    $currYear = $r[0];
}
?>
</section>