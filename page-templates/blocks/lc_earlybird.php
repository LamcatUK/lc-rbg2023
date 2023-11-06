<?php
$eb = get_field('eb_visible', 'options')[0] ?? null;
$classes = $block['className'] ?? null;
if ($eb == 'Yes') {
    ?>
<section class="earlybird <?=$classes?>">
    <div class="container-xl py-4 text-center">
        <div class="earlybird__inner bg--grad p-4">
            <h2 class="text-white">
                <?=get_field('eb_title', 'options')?>
            </h2>
            <div class="pb-2 text-white h5">
                <?=get_field('eb_content', 'options')?>
            </div>
            <a class="d-block btn btn-lg btn-gold"
                href="<?=get_field('eb_link', 'options')?>"
                target="_blank">Register
                Today!</a>
        </div>
    </div>
</section>
<?php
}
?>