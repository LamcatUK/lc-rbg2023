<?php
/**
 * Sign Up buttons
 *
 * @package lc-rbg2023
 */
?>
<section class="sign_up pt-4 pb-5">
	<div class="container-xl">
		<div class="row justify-content-center g-4 mb-4">
			<div class="col-md-2 text-center">
				<img
					src="<?= esc_url( get_stylesheet_directory_uri() ); ?>/img/rbg_half.svg"
					alt="" width="150px">
			</div>
			<div class="col-md-2 text-center">
				<img
					src="<?= esc_url( get_stylesheet_directory_uri() ); ?>/img/rbg_10k.svg"
					alt="" width="150px">
			</div>
			<div class="col-md-2 text-center">
				<img
					src="<?= esc_url( get_stylesheet_directory_uri() ); ?>/img/rbg_5k.svg"
					alt="" width="150px">
			</div>
			<div class="col-md-2 text-center">
				<img
					src="<?= esc_url( get_stylesheet_directory_uri() ); ?>/img/rbg_kids_jjj.svg"
					alt="" width="150px">
			</div>
		</div>
		<script>(function(d, s, id){ var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.async = true; js.src = "//www.race-space.com/assets/widget/rs-widget-v1.0.js"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'racespace-widget'));</script>
		<div class="text-center">
			<button class="btn btn-gold rsBtn" data-event="https://www.race-space.com/gb/run-barns-green/run-barns-green-half-marathon-10k-5k">Sign Up</button>
		</div>
	</div>
</section>