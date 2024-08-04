<div class="front-hero"
    style="background-image:url('<?=wp_get_attachment_image_url(get_field('background'), 'full')?>')">
    <div class="front-hero__overlay"></div>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 col-lg-6 text-center text-lg-start d-flex align-items-center">
                <div class="front-hero__inner w-100 mb-4 my-lg-auto w-md-auto mt-5 mt-lg-auto" data-aos="fade-right">
                    <h1 class="front-hero__title" data-aos="fade-right" data-aos-delay="250">
                        <em>Run</em><br class="d-none d-lg-block">
                        Barns<br class="d-none d-lg-block">
                        Green
                    </h1>
                    <div class="front-hero__subtitle" data-aos="fade-right" data-aos-delay="500">
                        Half Marathon, 10k,<br class="d-none d-lg-block">
                        5k and Junior Races
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-end">
                <div class="front-hero__badges mb-5" data-aos="fade-left" data-aos-delay="375">
                    <div class="front-hero__racecheck"><img
                            src="<?=wp_get_attachment_image_url(get_field('race_check', 'options'), 'full')?>"
                            alt="Race Check"></div>
                    <div class="front-hero__barr"><img
                            src="<?=wp_get_attachment_image_url(get_field('barr', 'options'), 'full')?>"
                            alt="BARR"></div>
                </div>
                <div class="front-hero__countdown" data-aos="fade-up">
                    <div class="front-hero__countdown--overlay"></div>
                    <?php
                    $next = get_field('next_event', 'options');
    $next = explode(':', $next);
    $date = mktime($next['0'], $next['1'], 0, $next['3'], $next['4'], $next['5']);
    ?>
                    <div class="h4 text-center">Race Day is
                        <?=date('jS F, Y', $date)?>
                    </div>
                    <?=do_shortcode("[countdown id='cnt' year='{$next['5']}' month='{$next['3']}' day='{$next['4']}' hour='{$next['0']}' min='{$next['1']}' sec='00']")?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$news = get_posts(array( 'numberposts' => 4, 'fields' => 'ids' ));

    ?>
<div class="notification">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="ticker-wrap d-flex gap-2">
                <div class="ticker-heading">Latest:</div>
                    <div class="ticker swiper">
                        <div class="swiper-wrapper">
                            <?php
                            foreach ($news as $n) {
                                ?>
                                <div class="swiper-slide">
                            <a href="<?=get_the_permalink($n)?>"
                                class="ticker__item"><?=get_the_title($n)?></a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".ticker", {
      direction: "vertical",
      slidesPerView: 1,
      autoplay: true,
      infinite: true,
      loop: true,
    });
  </script>