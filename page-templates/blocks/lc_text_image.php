<section class="text_image py-5">
    <div class="container-xl">
        <h2 class="underline text-green-400 mb-4" data-aos="fade">
            <?=get_field('title')?>
        </h2>
        <div class="row">
            <div class="col-md-7 order-2 order-md-1" data-aos="fade">
                <?=get_field('content')?>
                <?php
                if (get_field('cta')) {
                    $l = get_field('cta');
                    ?>
                <div class="text-center">
                    <a href="<?=$l['url']?>"
                        class="btn btn-green btn--has-arrow"
                        target="<?=$l['target']?>"><?=$l['title']?></a>
                </div>
                <?php
                }
            ?>
            </div>
            <div class="col-md-5 order-1 order-md-2 mb-4" data-aos="fade">
                <img src="<?=wp_get_attachment_image_url(get_field('image'), 'large')?>"
                    alt="" class="mb-4">
            </div>
        </div>
    </div>
</section>