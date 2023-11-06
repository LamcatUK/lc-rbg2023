<?php
$classes = $block['className'] ?? null;
$sticky = get_field('sticky') ?? null ? 'sticky' : '';
$r = random_str(8);
?>
<section
    class="buttons inlinks py-2 mb-5 <?=$classes?> <?=$sticky?>">
    <div class="container-xl">
        <div class="d-none d-lg-flex gap-4 justify-content-around flex-wrap">
            <?php
    while(have_rows('buttons')) {
        the_row();
        ?>
            <a href="#<?=get_sub_field('id')?>"
                class="btn btn-outline btn--small"><?=get_sub_field('title')?></a>
            <?php
    }
?>
        </div>
        <div class="inlinks__select d-lg-none">
            <div class="inlinks__select_title">Quick Links</div>
            <select class="form-select" id="inlinks_<?=$r?>">
                <?php
while(have_rows('buttons')) {
    the_row();
    ?>
                <option
                    value="#<?=get_sub_field('id')?>">
                    <?=get_sub_field('title')?>
                </option>
                <?php
}
?>
            </select>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () use ($r) {
    ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const select = document.querySelector('#inlinks_<?=$r?>');

        select.addEventListener('change', function() {
            const selectedValue = select.value;
            if (selectedValue) {
                window.location.href = selectedValue; // Redirect to the selected link
            }
        });
    });
</script>
<?php
});
?>