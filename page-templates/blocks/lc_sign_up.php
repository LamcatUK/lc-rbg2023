<?php
/**
 * Sign Up buttons
 *
 * @package lc-rbg2023
 */

$rs_link = get_field( 'racespace_signup_link', 'option' ) ? get_field( 'racespace_signup_link', 'option' ) : '';

$jjj = get_field( 'jjj_signup_link', 'option' ) ? get_field( 'jjj_signup_link', 'option' )['url'] : '';

// https://www.race-space.com/gb/run-barns-green/run-barns-green-half-marathon-10k-5k
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
		</div>
		<?php
		if ( $rs_link ) {
			?>
		<script>(function(d, s, id){ var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.async = true; js.src = "//www.race-space.com/assets/widget/rs-widget-v1.0.js"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'racespace-widget'));</script>
		<div class="text-center">
			<button class="btn btn-gold rsBtn" data-event="<?= esc_url( $rs_link ); ?>">Sign Up</button>
		</div>
			<?php
		}

		if ( $jjj ) {
			?>
		<h2 class="pt-5 underline text-green-400 mb-4">Jennings Junior Jog</h2>
		<div class="row g-4">
			<div class="col-md-2 text-center">
				<img
					src="<?= esc_url( get_stylesheet_directory_uri() ); ?>/img/rbg_kids_jjj.svg"
					alt="" width="150px">
			</div>
			<div class="col-md-4 my-auto">
				<p>Sign up here for the annual Kid's race</p>
				<a href="<?= esc_url( $jjj ); ?>" class="btn btn-gold">Sign Up</a>
			</div>
		</div>
			<?php
		} else {
			?>
		<h2 class="pt-5 underline text-green-400 mb-4">Jennings Junior Jog</h2>
		<div class="row g-4">
			<div class="col-md-2 text-center">
				<img
					src="<?= esc_url( get_stylesheet_directory_uri() ); ?>/img/rbg_kids_jjj.svg"
					alt="" width="150px">
			</div>
			<div class="col-md-4 my-auto">
				<p>Sign-up for the annual Kids’ Race will open closer to the event date. Keep an eye on our social media for more details.</p>
			</div>
		</div>
			<?php
		}
		?>
	</div>
</section>