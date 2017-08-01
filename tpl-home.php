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
          <?php

            $args = array(
              'post_type'     => 'slide',
              'post_status'   => 'publish',
              'order'         => 'ASC',
              'order_by'      => 'ID'
            );

            $cars = new WP_Query( $args );

            $c = 0;

            if( $cars->have_posts() ) : while( $cars->have_posts() ) : $cars->the_post();
              $class = ''; $c++;
              if ( $c == 1 ) $class .= ' active';
            ?>
              <div id="post-<?php the_ID(); ?>" class="item <?php echo $class; ?>">

                <?php
                  $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
                ?>
                <img alt="Skoda" class="center-block full-img" src="<?php echo $image; ?>">


                <div class="slide-caption-text">
                  <h2><?php echo get_the_title(); ?></h2>
        					<p><?php echo the_content(); ?></p>
                  <a class="btn btn-primary" href="#">Explore</a>
                </div>
              </div><!-- end item --><?php
              endwhile;
              wp_reset_postdata();
            endif; ?>
          </div>

    	</div>
    </div>

    <!-- Home CTA -->
    <div class="container volvo1_home-cta-section">
    	<div class="row">
    		<?php dynamic_sidebar( 'sidebar-2' ); ?>
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
