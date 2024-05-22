<?php
$classes = $block['className'] ?? null;
?>
<section class="hero <?=$classes?>">
    <?=get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'hero__bg'))?>
    <div class="front-hero__overlay"></div>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 col-lg-6 text-center text-lg-start d-flex align-items-center">
                <div class="hero__inner" data-aos="fade-right">
                    <h1 data-aos="fade-right" data-aos-delay="250">
                        <?=get_field('title')?>
                    </h1>
                    <?php
                    if (get_field('subtitle')) {
                        ?>
                    <div class="hero__subtitle" data-aos="fade-right" data-aos-delay="500">
                        <?=get_field('subtitle')?>
                    </div>
                    <?php
                    }
?>
                </div>
            </div>
        </div>
    </div>
</section>