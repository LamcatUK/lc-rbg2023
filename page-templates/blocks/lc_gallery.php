<section class="gallery_block">
    <div class="container-xl">
        <div class="button-group filter-button-group">
            <button data-filter="*" class="btn btn-filter mb-2 active">Show All</button>
            <?php
            if (have_rows('galleries')) {
                while(have_rows('galleries')) {
                    the_row();
                    ?>
            <button
                data-filter=".<?=acf_slugify(get_sub_field('title'))?>"
                class="btn btn-filter mb-2"><?=get_sub_field('title')?></button>
            <?php
                }
            } else {
                echo 'NO GALLERIES';
            }
            ?>
        </div>
        <div class="gallery">
            <div class="grid-sizer"></div>
            <?php
            while (have_rows('galleries')) {
                the_row();
                $title = get_sub_field('title');
                $images = get_sub_field('gallery');

                foreach ($images as $i) {
                    ?>
            <div
                class="img <?=acf_slugify(get_sub_field('title'))?>">
                <a href="<?=wp_get_attachment_image_url($i, 'full')?>"
                    data-fancybox="image">
                    <img src="<?=wp_get_attachment_image_url($i, 'medium')?>"
                        class="img-fluid" loading="lazy">
                </a>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
    ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css"
    integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
    integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.min.js"
    integrity="sha512-GNb4Gyn5ZK+XcsnKg8jeo5olNYWqH+j+gMvbG1X5Z9Vz7bv/tQ2spLUuKcXo8T3r4p3IxVt0e/ARNwFftqCt+w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
    integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    (function($) {

        // init Isotope
        $('.gallery').imagesLoaded(function() {

            $("[data-fancybox]").fancybox({
                loop: true,
                keyboard: true,
                toolbar: false,
                arrows: true
            });

            var $grid = $('.gallery').isotope({
                itemSelector: '.img',
                percentPosition: true,
                masonry: {
                    // use element for option
                    columnWidth: '.grid-sizer'
                }
            });

            // filter items on button click
            $('.filter-button-group').on('click', 'button', function() {
                var filterValue = $(this).attr('data-filter');
                $('.filter-button-group').find('.active').removeClass('active');
                $(this).addClass('active');
                $grid.isotope({
                    filter: filterValue
                });
            });
        });

    })(jQuery);
</script>
<?php
}, 9998);
            ?>