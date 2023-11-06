<?php
$classes = $block['className'] ?? null;
?>
<a id="race-info" class="anchor"></a>
<div class="race_nav py-5 <?=$classes?>">
    <div class="race_nav__overlay"></div>
    <div class="container">
        <h2 class="underline text-green-400 mb-4" data-aos="fade">Race Information</h2>
        <div class="row mb-4">
            <div class="col-sm-6 col-lg-3 mb-4 px-4" data-aos="fade">
                <a class="race_nav__card" href="/event-information/half-marathon/">
                    <img src="<?=get_stylesheet_directory_uri()?>/img/rbg_half.svg"
                        alt="">
                    <div class="race_nav__ages">Age 17+</div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 px-4" data-aos="fade" data-aos-delay="100">
                <a class="race_nav__card" href="/event-information/10k/">
                    <img src="<?=get_stylesheet_directory_uri()?>/img/rbg_10k.svg"
                        alt="">
                    <div class="race_nav__ages">Age 15+</div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 px-4" data-aos="fade" data-aos-delay="200">
                <a class="race_nav__card" href="/event-information/5k/">
                    <img src="<?=get_stylesheet_directory_uri()?>/img/rbg_5k.svg"
                        alt="">
                    <div class="race_nav__ages">Age 11+</div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 px-4" data-aos="fade" data-aos-delay="300">
                <a class="race_nav__card" href="/event-information/jennings-junior-jog/">
                    <img src="<?=get_stylesheet_directory_uri()?>/img/rbg_kids_jjj.svg"
                        alt="">
                    <div class="race_nav__ages">Age 4-11</div>
                </a>
            </div>
        </div>
        <div class="text-center" data-aos="fade" data-aos-delay="400">
            <a href="/sign-up/" class="btn btn-gold btn--has-arrow">Event Signup</a>
        </div>
    </div>
</div>