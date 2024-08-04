<?php
$news = array();
if (get_field('notification', 'options') ?? null) {
    $news[] = get_field('notification', 'options');
    /*    ?>
    <div class="notification">
        Latest: <a
            href="<?=get_permalink(get_field('notification', 'options'))?>"><?=get_the_title(get_field('notification', 'options'))?></a>
    </div>
    <?php
    */
}

$news = get_posts(array( 'numberposts' => 4, 'fields' => 'ids' ));
?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<div class="notification">
    <div class="ticker-wrap">
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