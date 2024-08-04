<section class="charity_feature py-5">
    <div class="charity_feature__overlay"></div>
    <div class="container-lg">
        <div class="row stats mb-5">
            <div class="col-6 col-md-3" data-aos="fade">
                <?php
            $stats = get_field('stats', 'options');
                ?>
                <div class="stats__stat">
                    <?=do_shortcode("[countup start='0' end='{$stats['finishers']}' decimals='0' duration='4' scroll='true']")?>
                </div>
                <div class="stats__title">Finishers in
                    <?=$stats['finishers_year']?>
                </div>
            </div>
            <div class="col-6 col-md-4" data-aos="fade" data-aos-delay="100">
                <div class="stats__stat"><?php
                    $time = $stats['half_record'];
                $hh = $time['hours'];
                echo do_shortcode("[countup start='0' end='" . $hh . "' prefix='0' decimals='0' duration='4' scroll='true']");
                echo ":";
                echo do_shortcode("[countup start='0' end='{$time['minutes']}' prefix='0' decimals='0' duration='4' scroll='true']");
                echo ":";
                echo do_shortcode("[countup start='0' end='{$time['seconds']}' decimals='0' duration='4' scroll='true']");
                ?></div>
                <div class="stats__title">Half Marathon Record</div>
            </div>
            <div class="col-6 col-md-3" data-aos="fade" data-aos-delay="200">
                <div class="stats__stat">
                    £<?=do_shortcode("[countup start='0' end='{$stats['amount_raised']}' decimals='0' duration='4' scroll='true']")?>k
                </div>
                <div class="stats__title">for charity (est)</div>
            </div>
            <div class="col-6 col-md-2" data-aos="fade" data-aos-delay="300">
                <div class="stats__stat">
                    <?php
                    $years = date('Y') - 1982;
                ?>
                    <?=do_shortcode("[countup start='0' end='{$years}' decimals='0' duration='4' scroll='true']")?>
                </div>
                <div class="stats__title">years</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2" data-aos="fade">
                <div class="charity_feature__charity">
                    <?php
                    $chid = get_field('charity')[0];
                ?>
                    <h2 class="underline text-green-400 h3 mb-4">Our 2024 Charity -
                        <?=get_the_title($chid)?>
                    </h2>
                    <div class="row mb-4">
                        <div class="col-md-6"><img
                                src="<?=wp_get_attachment_image_url(get_field('charity_logo', $chid), 'full')?>" alt="">
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <?=get_field('intro')?>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="/charities/" class="btn btn-green btn--has-arrow">Find out more about the local
                            charities and groups
                            we support</a>
                    </div>
                </div>
            </div>
        </div>
</section>