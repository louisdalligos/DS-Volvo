<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ds-volvo
 */

?>

	<footer class="volvo1_page-footer">
		<div class="volvo1_footer-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-md-push-3 volvo1_map-widget">
						<div class="map" data-address="13 Hume Highway Warwick Farm, Sydney NSW 2170" id="volvo1_dealer-gmap"></div>
					</div>
					<div class="col-md-3 col-sm-6 col-md-pull-6 volvo1_footer-widget trading-hours-widget">
						<h4>Trading hours</h4>
						<p><span class="text-uppercase"><strong>Sales Department</strong></span> <span>Mon - Fri: 8.30am - 5.30pm</span> <span>Sat: 9am - 5pm</span> <span>Sun &amp; Pub Hol: 10am - 5pm</span></p>
						<p><span class="text-uppercase"><strong>Service Department</strong></span> <span>Mon - Fri: 7.30am - 5pm</span></p>
						<p><span class="text-uppercase"><strong>Parts Department</strong></span> <span>Mon - Fri: 8am - 5pm</span> <span>Sat: 8am - 12pm</span></p>
					</div>
					<div class="col-md-3 col-sm-6 volvo1_footer-widget contact-widget">
						<h4>Contact Us</h4>
						<div class="volvo1_map-buttons">
							<a class="btn btn-default btn-block btn-white" href="#">Get Directions</a> <a class="btn btn-default btn-block">Virtual Tour</a>
						</div>
						<address>
							13 Hume Highway<br>
							(corner Todman Rd &amp; Hume Highway)<br>
							Warwick Farm, Sydney NSW 2170
						</address><span>Phone: (02) 9828 8123</span> <span>Fax: (02) 9828 8776</span>
					</div>
				</div>
			</div>
		</div>
		<div class="volvo1_footer-bottom text-center">
			<ul class="social-profiles list-unstyled list-inline">
				<li>
					<a href="<?php echo get_theme_mod('facebook_link'); ?>"><i class="fa fa-facebook-official"></i></a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod('google_link'); ?>"><i class="fa fa-google-plus-square"></i></a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod('twitter_link'); ?>"><i class="fa fa-twitter"></i></a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod('youtube_link'); ?>"><i class="fa fa-youtube"></i></a>
				</li>
			</ul>

			<p class="volvo1_copyright-text text-uppercase">
				<small><?php echo get_theme_mod('copyright_text'); ?></small>
			</p>

			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
					'container'      => 'div',
					'menu_class' 		 => 'footer-menu text-uppercase list-unstyled list-inline'
				) );
			?>

			<p class="text-uppercase"><small>Website by <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Dealer Solutions</a></small></p>

			<img alt="Volvo" src="<?php echo get_template_directory_uri(); ?>/img/volvo-footer-logo.png">
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
