<?php
$half = get_field('half_signup_link', 'options') ?? null;
$ten = get_field('10k_signup_link', 'options') ?? null;
$five = get_field('5k_signup_link', 'options') ?? null;
$jjj = get_field('jjj_signup_link', 'options') ?? null;
?>
<section class="sign_up pt-4 pb-5">
    <div class="container-xl d-flex justify-content-center gap-4 flex-wrap">
        <?php
        if ($half) {
            ?>
        <div class="text-center">
            <img class="d-block mb-3 mx-auto pe-3"
                src="<?=get_stylesheet_directory_uri()?>/img/rbg_half.svg"
                alt="" width="150px">
            <a class="btn btn-gold"
                href="<?=$half['url']?>"
                target="_blank">Half Marathon Sign Up <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
        <?php
        }
if ($ten) {
    ?>
        <div class="text-center">
            <img class="d-block mb-3 mx-auto pe-3"
                src="<?=get_stylesheet_directory_uri()?>/img/rbg_10k.svg"
                alt="" width="150px">
            <a class="btn btn-gold"
                href="<?=$ten['url']?>"
                target="_blank">10k Sign Up <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
        <?php
}
if ($five) {
    ?>
        <div class="text-center">
            <img class="d-block mb-3 mx-auto pe-3"
                src="<?=get_stylesheet_directory_uri()?>/img/rbg_5k.svg"
                alt="" width="150px">
            <a class="btn btn-gold"
                href="<?=$five['url']?>"
                target="_blank">5k Sign Up <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
        <?php
}
if ($jjj) {
    ?>
        <div class="text-center">
            <img class="d-block mb-3 mx-auto pe-3"
                src="<?=get_stylesheet_directory_uri()?>/img/rbg_kids_jjj.svg"
                alt="" width="150px">
            <a class="btn btn-gold"
                href="<?=$jjj['url']?>"
                target="_blank">JJJ Sign Up <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
        <?php
}
?>
    </div>
</section>