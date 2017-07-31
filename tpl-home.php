<?php
/**
 * Template Name: Home
 *
 * @package ds-volvo
 *
 */

 get_header();

   if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
