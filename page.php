<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ds-volvo
 */

get_header(); ?>

	<div class="page-banner">
		<?php
			if ( has_post_thumbnail() ){

				$featured_image_id = get_post_thumbnail_id();
				$featured_image_url_array = wp_get_attachment_image_src($featured_image_id, 'full', true);
				$featured_image_url = $featured_image_url_array[0];

				if ( ! empty( $featured_image_url ) ) { ?>
					<img class="center-block full-img img-responsive" src="<?php echo $featured_image_url; ?>" alt=""><?php
				}
			} else { ?>
				<img class="center-block full-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/banners/inner-page-banner.jpg" alt="banner"><?php
			}
		?>

	</div>

	<!-- Page content -->
	<div class="volvo1_page-body-content">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<!-- booking form -->
		<form class="volvo1_forms container hidden-xs" id="book-service-form" name="book-service-form">
			<h2>Book a Service</h2>
			<div class="row">
				<hr>
				<div class="col-md-4 col-sm-6">
					<div class="form-group">
						<label for="book-service-input-firstname">First Name</label> <input class="form-control" id="book-service-input-firstname" placeholder="First Name" type="text">
					</div>
					<div class="form-group">
						<label for="book-service-input-phone">Phone</label> <input class="form-control" id="book-service-input-phone" placeholder="Phone" type="text">
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="form-group">
						<label for="book-service-input-surname">Surname</label> <input class="form-control" id="book-service-input-surname" placeholder="Surname" type="text">
					</div>
					<div class="form-group">
						<label for="book-service-input-mobile">Mobile</label> <input class="form-control" id="book-service-input-mobile" placeholder="Mobile" type="text">
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="form-group">
						<label for="book-service-input-email">Email</label> <input class="form-control" id="book-service-input-email" placeholder="Email" type="email">
					</div>
					<div class="form-group">
						<label for="book-service-input-date">Service date (Due to availability)</label> <input class="form-control" id="book-service-input-date" type="date">
					</div>
				</div>
			</div>
			<div class="row">
				<hr>
				<div class="col-md-4 col-sm-6">
					<div class="form-group">
						<label for="book-service-input-make">Select Make</label> <input class="form-control" id="book-service-input-make" placeholder="Make" type="text">
					</div>
					<div class="form-group">
						<label for="book-service-input-year">Select Year</label> <input class="form-control" id="book-service-input-year" placeholder="Year" type="text">
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="form-group">
						<label for="book-service-input-model">Select Model</label> <input class="form-control" id="book-service-input-model" placeholder="Model" type="text">
					</div>
					<div class="form-group">
						<label for="book-service-input-vin">VIN</label> <input class="form-control" id="book-service-input-vin" placeholder="000000" type="text">
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<label for="book-service-input-comment">Comments</label>
					<textarea id="book-service-input-comment" placeholder="Comments" rows="3"></textarea> <button class="btn btn-primary btn-block" type="submit">Submit booking</button>
				</div>
			</div>
		</form>
	</div>
<?php
get_footer();
