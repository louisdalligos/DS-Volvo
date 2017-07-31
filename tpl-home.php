<?php
/**
 * Template Name: Home
 *
 * @package ds-volvo
 *
 */

 get_header();

   if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

     <div class="volvo1_banner-slide page-banner">
    	<div class="carousel slide" data-ride="carousel" id="volvo1_carousel">
    		<!-- Wrapper for slides -->
    		<div class="carousel-inner">
    			<div class="item active">
    				<img alt="Banner 1" class="center-block full-img" src="<?php echo get_template_directory_uri(); ?>/img/banners/home-banner.jpg">
    				<div class="slide-caption-text">
    					<h2>Made by Sweden</h2>
    					<p>Browse our lineup and discover our tradition of style<br>
    					and safety built into each and every Volvo.</p><a class="btn btn-primary" href="#">Explore</a>
    				</div>
    			</div>
    			<div class="item">
    				<img alt="Banner 2" class="center-block full-img" src="<?php echo get_template_directory_uri(); ?>/img/banners/home-banner.jpg">
    				<div class="slide-caption-text">
    					<h2>Caption here</h2>
    					<p>Browse our lineup and discover our tradition of style<br>
    					and safety built into each and every Volvo.</p><a class="btn btn-primary" href="#">Button</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

     <div class="volvo1_page-body-content home">
       <div class="container">
         <div class="row">
           <div class="col-md-3 col-sm-3 hidden-xs hidden-sm">
             <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/intro-text-featured-img.jpg" alt="intro-image">
           </div>

           <div class="col-md-9 col-sm-12">
             <?php the_content(); ?>
           </div>

           <?php get_sidebar(); ?>

         </div>
       </div>
     </div>

     <?php endwhile;
   endif; ?>

 <?php get_footer(); ?>
