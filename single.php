<?php
// Exit if accessed directly.

use function PHPSTORM_META\map;

defined('ABSPATH') || exit;
get_header();
$img = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>
<main id="main" class="blog">
    <?php
    $content = get_the_content();
$blocks = parse_blocks($content);
$sidebar = array();
$after;
?>
    <section class="breadcrumbs container-xl">
        <?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
}
?>
    </section>
    <div class="container-xl">
        <div class="row g-4 pb-4">
            <div class="col-lg-9">
                <h1 class="blog__title"><?=get_the_title()?></h1>
                <img src="<?=$img?>" alt="" class="blog__image">
                <?php
        $count = estimate_reading_time_in_minutes(get_the_content(), 200, true, true);
echo $count;

foreach ($blocks as $block) {
    if ($block['blockName'] == 'core/heading') {
        if (!array_key_exists('level', $block['attrs'])) {
            $heading = strip_tags($block['innerHTML']);
            $id = acf_slugify($heading);
            echo '<a id="' . $id . '" class="anchor"></a>';
            $sidebar[$heading] = $id;
        }
    }
    echo render_block($block);
}
?>
            </div>
            <div class="col-lg-3 sidebar">
                <h3 class="underline">Latest News</h3>
                <?php
                $r = new WP_Query(array(
                    'post__not_in' => array(get_the_ID()),
                    'posts_per_page' => 4
                ));
while ($r->have_posts()) {
    $r->the_post();
    ?>
                <a class="blog_card" href="<?=get_the_permalink()?>">
                    <img src="<?=get_the_post_thumbnail_url(get_the_ID(), 'large')?>"
                        alt="" class="blog_card__image">
                    <div class="blog_card__content">
                        <h3 class="blog_card__title">
                            <?=get_the_title()?>
                        </h3>
                    </div>
                </a>
                <?php
}

?>
                <a href="/sign-up/" class=" my-4 btn btn-gold btn--has-arrow w-100">Sign Up Today</a>

                <h3 class="mt-4 underline">Sponsored By</h3>
                <?php
$s = new WP_Query(array(
    'post_type' => 'sponsors',
    'posts_per_page' => 1,
    'orderby' => 'rand'
));
while ($s->have_posts()) {
    $s->the_post();
    $slug = acf_slugify(get_the_title(get_the_ID()));
    ?>
                <a class="sidebar_sponsor"
                    href="/sponsors/#<?=$slug?>">
                    <img src="<?=wp_get_attachment_image_url(get_field('sponsor_logo', $s->id), 'full')?>"
                        alt="">
                </a>
                <?php
}

?>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>