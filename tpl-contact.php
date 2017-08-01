<?php
/**
 * Template Name: Contact
 *
 * @package ds-volvo
 *
 */

 get_header(); ?>

  <div class="page-banner">
    <div class="map" data-address="13 Hume Highway Warwick Farm, Sydney NSW 2170" id="contact-page-map"></div>
  </div>

  <!-- Page content -->
  <div class="volvo1_page-body-content"><?php
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="container">
        <h2 class="page-heading-title"><?php echo the_title(); ?></h2>
      </div>

      <div class="volvo1-inner-content">
    		<div class="container">

          <?php the_content(); ?>
        </div>
      </div>

     <?php endwhile;
   endif; ?>

   <form class="volvo1_forms container hidden-xs" id="email-enquiry-form" name="email-enquiry-form">
  	<h2>Email Enquiry</h2>
  	<div class="row">
  		<hr>
  		<div class="col-md-4 col-sm-6">
  			<div class="form-group">
  				<label for="email-enquiry-input-firstname">First Name</label> <input class="form-control" id="email-enquiry-input-firstname" placeholder="First Name" type="text">
  			</div>
  			<div class="form-group">
  				<label for="email-enquiry-input-email">Email</label> <input class="form-control" id="email-enquiry-input-email" placeholder="Email" type="email">
  			</div>
  		</div>
  		<div class="col-md-4 col-sm-6">
  			<div class="form-group">
  				<label for="email-enquiry-input-surname">Surname</label> <input class="form-control" id="email-enquiry-input-surname" placeholder="Surname" type="text">
  			</div>
  			<div class="form-group">
  				<label for="email-enquiry-input-phone">Phone</label> <input class="form-control" id="email-enquiry-input-phone" placeholder="Phone" type="text">
  			</div>
  		</div>
  		<div class="col-md-4 col-sm-6">
  			<label for="email-enquiry-input-comment">Comments</label>
  			<textarea id="email-enquiry-input-comment" placeholder="Comments" rows="3"></textarea> <button class="btn btn-primary btn-block" type="submit">Submit booking</button>
  		</div>
  	</div>
  </form>
  <div class="visible-xs mobile-email-enquiry">
  	<a class="btn btn-primary" href="#">Email Enquiry</a>
  </div>
 </div><!-- end volvo1_page-body-content -->

 <?php get_footer(); ?>
