<section class="sponsors pt-5 pb-4">
    <div class="container">
        <h2 class="text-white underline mb-5">Our Sponsors</h2>
        <div class="sponsors__grid">
            <?php
        $q = new WP_Query(array(
            'post_type' => 'sponsors',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'rand',
        ));

            while ($q->have_posts()) {
                $q->the_post();
                $s = acf_slugify(get_the_title(get_the_ID()));
                ?>
            <a class="sponsors__card" href="/sponsors/#<?=$s?>">
                <img
                    src="<?=wp_get_attachment_image_url(get_field('sponsor_logo', get_the_ID()), 'large')?>">
            </a>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<?php
            add_action('wp_footer', function () {
                ?>
<script type="text/javascript">
    (function($) {
        $('.sponsors__grid').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ],
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false
        });
    })(jQuery);
</script>
<?php
            }, 9999);
            ?>