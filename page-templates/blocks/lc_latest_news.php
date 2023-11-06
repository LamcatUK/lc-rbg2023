<section class="latest_news py-5">
    <div class="container">
        <h2 class="underline text-green-400 mb-4" data-aos="fade">Latest News</h2>
        <div class="row">
            <?php
    $q = new WP_Query(array(
        'posts_per_page' => 3
    ));
            $d = 0;
            while ($q->have_posts()) {
                $q->the_post();
                ?>
            <div class="col-md-4 mb-4 mb-md-0" data-aos="fade"
                data-aos-delay="<?=$d?>">
                <a class="latest_news__card"
                    href="<?=get_the_permalink()?>">
                    <img src="<?=get_the_post_thumbnail_url(get_the_ID(), 'large')?>"
                        alt="">
                    <h3><?=get_the_title()?></h3>
                    <div class="latest_news__date">
                        <?=get_the_date('jS F, Y')?>
                    </div>
                </a>
            </div>
            <?php
                $d += 100;
            }

            ?>
        </div>
    </div>
</section>