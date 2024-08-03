<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lc-rbg2023
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>
<div class="page-bottom-highlight"></div>
</div>
<footer class="footer pt-5">
    <div class="container-xl" id="footer-content">
        <div class="row pb-4">
            <div class="col-sm-6 col-lg-3 order-3 order-lg-1">
                <img src="/wp-content/themes/lc-rbg2023/img/barr-gold-footer.png" width="116" height="175"
                    alt="Barr Gold Race Grade" class="d-inline me-2">
                <img src="/wp-content/themes/lc-rbg2023/img/racecheck-gold-award-2022.png" width="130"
                    alt="Racecheck Gold" class="d-inline">
            </div>
            <div class="col-sm-6 col-lg-6 mb-2 order-1 order-lg-2">
                <div class="menu-title">Quick Links</div>
                <?php wp_nav_menu(array('theme_location' => 'footer_menu1', 'menu_class' => 'cols-lg-2')); ?>
            </div>
            <div class="col-12 col-lg-3 mb-2 order-2 order-lg-3">
                <div class="menu-title">Connect</div>
                <div class="social-icons mb-2">
                    <?=do_shortcode('[social_icons]')?>
                </div>
            </div>
        </div>
    </div>
    <div class="colophon">
        <div class="container-xl py-2">
            <div class="row">
                <div class="col-md-6 mb-2 mb-md-0">
                    &copy; <?=date('Y')?> Barns
                    Green
                    Half Marathon Committee
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="/privacy-policy/">Privacy Policy</a> | <a href="/cookie-policy/">Cookie Policy</a>
                    | Site by <a href="https://www.lamcat.co.uk/" rel="nofollow noopener" target="_blank" class="lc"
                        title="Site by Lamcat">Lamcat</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<a id="to-top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.11 67.18">
        <g id="Layer_2" data-name="Layer 2">
            <g id="Layer_1-2" data-name="Layer 1">
                <path
                    d="M69.42,39.66,66,43.08a5.88,5.88,0,0,1-4.15,1.74,5.72,5.72,0,0,1-4.11-1.74L44.32,29.71V61.84c0,3.29-2.74,5.34-5.85,5.34H32.63c-3.1,0-5.84-2.05-5.84-5.34V29.71L13.37,43.08a5.71,5.71,0,0,1-8.21,0L1.73,39.66A5.84,5.84,0,0,1,0,35.55,5.94,5.94,0,0,1,1.73,31.4L31.45,1.69A5.65,5.65,0,0,1,35.55,0a5.88,5.88,0,0,1,4.16,1.69L69.42,31.4a6.07,6.07,0,0,1,1.69,4.15A6,6,0,0,1,69.42,39.66Z" />
            </g>
        </g>
    </svg></a>
<?php wp_footer();
if (get_field('gtm_property', 'options')) {
    if (!is_user_logged_in()) {
        ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <?php
    }
}
?>
</body>

</html>