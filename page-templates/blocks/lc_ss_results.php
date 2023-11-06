<?php
$classes = $block['className'] ?? null;
?>
<a id="full" class="anchor"></a>
<section class="ss_results bg--grad text-white py-5 <?=$classes?>">
    <div class="container-xl">
        <div class="row">
            <div class="col-xl-3 offset-xl-1">
                <a href="https://www.sportsystems.co.uk/" target="_blank" rel="nofollow noopener"><img
                        src="<?=get_stylesheet_directory_uri()?>/img/ss-logo.svg"></a>
            </div>
            <div class="col-xl-7">
                <h2 class="h3 text-center">Full race results provided by Sports Systems</h2>
                <div class="d-flex flex-wrap justify-content-center gap-4">
                    <a class="btn btn-gold"
                        href="<?=get_field('ss_half_results', 'options')?>"
                        target="_blank">Half Marathon Results</a>
                    <a class="btn btn-gold"
                        href="<?=get_field('ss_10k_results', 'options')?>"
                        target="_blank">10K Results</a>
                    <a class="btn btn-gold"
                        href="<?=get_field('ss_5k_results', 'options')?>"
                        target="_blank">5K Results</a>
                </div>
            </div>
        </div>
</section>