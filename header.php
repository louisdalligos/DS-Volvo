<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ds-skoda
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsAON98ndGW0tqEmULBRVhFKV3UmgjPZQ"></script>
</head>

<body <?php body_class(); ?>>

	<header class="volvo1_page-header default-header-bg">

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			 ?>
			<img alt="Volvo" class="volvo1-main-logo" src="<?php echo $image[0]; ?>">
		</a>

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-6" id="volvo1_navbar">

					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'volvo1_main-menu',
							'container'      => 'ul',
							'menu_class' => 'list-unstyled list-inline hidden-xs hidden-sm'
						) );
					?>

				</div>
				<div class="volvo1_dealer-info col-md-6 col-sm-6 col-xs-6">
					<div class="volvo1_dealer-info hidden-xs text-right clearfix">
						<h1 class="volvo_dealer-name text-uppercase"><?php echo get_theme_mod('site_dealer_name'); ?></h1>
						<span class="text-uppercase"><?php echo get_theme_mod('site_dealer_contact_number'); ?></span>
						<address class="text-uppercase">
							<?php echo get_theme_mod('site_dealer_address'); ?>
						</address>
					</div>
				</div>
			</div>
		</div>
		<div class="visible-xs visible-sm" id="volvo1_header-mobile">
			<button aria-expanded="false" data-target="#volvo_mobile-menu" data-toggle="collapse" type="button"><span><i class="fa fa-bars"></i> Menu</span></button>
			<div class="collapse" id="volvo_mobile-menu">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-3',
						'menu_id'        => 'mobile-menu',
						'container'      => 'ul',
						'menu_class' => 'list-unstyled'
					) );
				?>
			</div>
			<a class="call-mobile-btn visible-xs" href="#"><i class="fa fa-phone"></i> Call</a>
		</div>
	</header>
