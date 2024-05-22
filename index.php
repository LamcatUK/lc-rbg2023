<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

$page_for_posts = get_option('page_for_posts');

get_header();
?>
<main id="main">
    <!-- hero -->
    <section class="hero">
        <?=get_the_post_thumbnail($page_for_posts, 'full', array('class' => 'hero__bg'))?>
        <div class="front-hero__overlay"></div>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 col-lg-6 text-center text-lg-start d-flex align-items-center">
                    <div class="hero__inner" data-aos="fade-right">
                        <h1 data-aos="fade-right" data-aos-delay="250">
                            RBG News
                        </h1>
                        <div class="hero__subtitle" data-aos="fade-right" data-aos-delay="500">
                            Latest updates and information about our races
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-xl py-5">
        <?php
        if (get_the_content(null, false, $page_for_posts)) {
            echo '<div class="mb-5">' . get_the_content(null, false, $page_for_posts) . '</div>';
        }

?>
        <div class="news__grid">
            <?php
    while (have_posts()) {
        the_post();
        $img = get_the_post_thumbnail_url(get_the_ID(), 'large');
        if (!$img) {
            $img = get_stylesheet_directory_uri() . '/img/default-blog.jpg';
        }

        $the_date = get_the_date('jS F, Y');

        ?>
            <a class="news__card"
                href="<?=get_the_permalink(get_the_ID())?>">
                <img class="news__image"
                    src="<?=get_the_post_thumbnail_url(get_the_ID(), 'large')?>">
                <div class="news__content">
                    <h3 class="news__title mb-0">
                        <?=get_the_title()?>
                    </h3>
                    <div class="news__date"><?=$the_date?></div>
                </div>
            </a>
            <?php
    }
?>
        </div>
    </div>
</main>
<?php
get_footer();
?>