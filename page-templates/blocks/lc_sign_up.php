<?php
$half = get_field( 'half_signup_link', 'options' ) ?? null;
$ten  = get_field( '10k_signup_link', 'options' ) ?? null;
$five = get_field( '5k_signup_link', 'options' ) ?? null;
$jjj  = get_field( 'jjj_signup_link', 'options' ) ?? null;
?>
<section class="sign_up pt-4 pb-5">
	<div class="container-xl">
		<div class="row justify-content-center g-4 mb-4">
			<?php
			if ( $half ) {
				?>
			<div class="col-md-2 text-center">
				<img
					src="<?php echo get_stylesheet_directory_uri(); ?>/img/rbg_half.svg"
					alt="" width="150px">
			</div>
				<?php
			}
			if ( $ten ) {
				?>
			<div class="col-md-2 text-center">
			<img
				src="<?php echo get_stylesheet_directory_uri(); ?>/img/rbg_10k.svg"
				alt="" width="150px">
			</div>
				<?php
			}
			if ( $five ) {
				?>
			<div class="col-md-2 text-center">
			<img
				src="<?php echo get_stylesheet_directory_uri(); ?>/img/rbg_5k.svg"
				alt="" width="150px">
			</div>
				<?php
			}
			if ( $jjj ) {
				?>
			<div class="col-md-2 text-center">
			<img
				src="<?php echo get_stylesheet_directory_uri(); ?>/img/rbg_kids_jjj.svg"
				alt="" width="150px">
			<!-- <a class="btn btn-gold"
				href="<?php echo $jjj['url']; ?>"
				target="_blank">JJJ Sign Up <i class="fa-solid fa-arrow-up-right-from-square"></i></a> -->
			</div>
				<?php
			}
			?>
		</div>
		<script>(function(d, s, id){ var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.async = true; js.src = "//www.race-space.com/assets/widget/rs-widget-v1.0.js"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'racespace-widget'));</script>
		<div class="text-center">
			<button class="btn btn-gold rsBtn" data-event="https://www.race-space.com/gb/run-barns-green/run-barns-green-half-marathon-10k-5k">Sign Up</button>
		</div>
	</div>
</section>