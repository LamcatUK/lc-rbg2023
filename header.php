<?php
/**
 * The header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package lc-rbg2023
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta
        charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/figtree-v5-latin-regular.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/figtree-v5-latin-600.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/figtree-v5-latin-800.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <?php
    if (is_front_page()) {
        /*
        ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Tidey & Webb Limited",
            "logo": "https://www.tideyandwebb.co.uk/wp-content/themes/lc-rbg2023/img/tidey-and-webb-og-1200x630.png",
            "url": "https://www.tideyandwebb.co.uk/",
            "telephone": "+441403741673",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Greenacres, Saucelands Lane, Shipley",
                "addressLocality": "Horsham",
                "postalCode": "RH13 8PU",
                "addressCountry": "GB"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 50.98046,
                "longitude": -0.402681
            },
            "sameAs": [
                "https://www.instagram.com/tideyandwebb/",
                "https://www.linkedin.com/company/tidey-&-webb-limited/about/",
                "https://twitter.com/tideyandwebb"
            ],
            "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": "+441403741673",
                "contactType": "enquiries"
            }],
            "openingHoursSpecification": [{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday"
                ],
                "opens": "08:00",
                "closes": "17:30"
            }]
        }
    </script>
    <?php
        */
    }
if (get_field('ga_property', 'options')) {
    if (!is_user_logged_in()) {
        ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async
        src="https://www.googletagmanager.com/gtag/js?id=<?=get_field('ga_property', 'options')?>">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config',
            '<?=get_field('ga_property', 'options')?>'
        );
    </script>
        <?php
    }
}
if (get_field('gtm_property', 'options')) {
    if (!is_user_logged_in()) {
        ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer',
            '<?=get_field('gtm_property', 'options')?>'
        );
    </script>
    <!-- End Google Tag Manager -->
        <?php
    }
}
if (get_field('google_site_verification', 'options')) {
    echo '<meta name="google-site-verification" content="' . get_field('google_site_verification', 'options') . '" />';
}
if (get_field('bing_site_verification', 'options')) {
    echo '<meta name="msvalidate.01" content="' . get_field('bing_site_verification', 'options') . '" />';
}
?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
    <?php understrap_body_attributes(); ?>>
    <?php
do_action('wp_body_open');
?>
    <div class="site" id="page">
        <header id="wrapper-navbar" class="fixed-top">
            <!-- <nav id="main-nav" class="navbar navbar-expand-lg d-block px-0 pt-2 pt-lg-0" -->
            <nav id="main-nav" class="navbar navbar-expand-lg"
                aria-labelledby="main-nav-label">
                <div class="container-xl">
                    <div class="d-flex w-100 w-lg-auto justify-content-between align-items-center pe-4">
                        <a href="/" class="navbar-brand" rel="home"></a>
                        <button class="navbar-toggler input-button collapsed" id="navToggle" data-bs-toggle="collapse"
                            data-bs-target=".navbars" type="button" aria-label="Navigation"></button>
                    </div>
                    <div class="w-100 d-flex flex-column-reverse flex-lg-column">
                        <div id="topNav" class="px-2 px-lg-0 collapse navbar-collapse navbars">
                            <ul id="top-nav"
                                class="navbar-nav w-100 justify-content-end align-items-lg-center mt-2 mt-lg-0 gap-2">
                                <li class="nav-item d-flex gap-2">
                                    <?=do_shortcode('[social_icons]')?>
                                </li>
                                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                    class="menu-item nav-item">
                                    <a title="Sign Up" href="/sign-up/"
                                        class="mt-2 mt-lg-0 btn btn-topnav d-block d-sm-inline-block">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                        <?php
                        wp_nav_menu(
                            array(
'theme_location'  => 'primary_nav',
'container_class' => 'pt-2 px-0 p-lg-0 collapse navbar-collapse navbars',
'container_id'    => 'primaryNav',
'menu_class'      => 'navbar-nav w-100 justify-content-between align-items-lg-center mt-2 mt-lg-0',
'fallback_cb'     => '',
'menu_id'         => 'main-menu',
'depth'           => 2,
'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
)
                        );
?>
                    </div>
                </div>

            </nav>
        </header>