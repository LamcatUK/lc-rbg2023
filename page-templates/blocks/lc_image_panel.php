<?php
$r = random_str(4);
?>
<a class="image_panel" id="panel_<?=$r?>" href="/gallery/">
    <?php
    foreach (get_field('images') as $i) {
        ?>
    <img
        src="<?=wp_get_attachment_image_url($i, 'large')?>">
    <?php
    }
?>
</a>
<?php
add_action('wp_footer', function () use ($r) {
    ?>
<script type="text/javascript">
    (function($) {
        $('#panel_<?=$r?>').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ],
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false
        });
    })(jQuery);
</script>
<?php
}, 9999);
?>