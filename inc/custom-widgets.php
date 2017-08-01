<?php
/**
 * Sample implementation of Custom Widgets feature
 *
 *
 * @package ds-volvo
 */

class Home_CTA_Widget extends WP_Widget {

  // setup widget name, description, etc..
  public function __construct() {

   $widget_opts = array(
     'classname' => 'volvo1_cta-block clearfix',
     'description' => 'CTA box widget'
   );

   parent::__construct( 'volvo_home_cta', 'Home CTA', $widget_opts );

  }

  // back-end display of the widget
  public function form( $instance ) { ?>
    <p>
      <label for="">CTA Name</label>
      <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" class="widefat">
    </p>
    <p>
      <label for="">Description</label>

      <textarea class="widefat" rows="16" cols="20" name='<?php echo $this->get_field_name('cta_desc'); ?>'><?php echo $instance['cta_desc']; ?></textarea>

    </p>
    <p>
      <label for="">CTA ID</label>
      <input type="text" name="<?php echo $this->get_field_name('cta_ID'); ?>" value="<?php echo $instance['cta_ID']; ?>" class="widefat">
    </p>
    <p>
      <button id="cta_bg_img" class="button button-secondary">Set background image</button>
      <input type="hidden" name="<?php echo $this->get_field_name('cta_bg_img_url'); ?>" value="<?php echo $instance['cta_bg_img_url']; ?>" class="cta_bg_link" />
      <div class="image_show">
        <img id="<?php echo $this->id; ?>" src="<?php echo $instance['cta_bg_img_url']; ?>" height="auto" alt="">
      </div>
    </p><?php
  }

  // front-end display of the widget
  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    echo $args['before_title'].$instance['title'].$args['after_title'];
    ?>

    <div class="cta-header clearfix">
      <div class="cta-header-image hidden-xs">
        <img class="" src="<?php echo $instance['cta_bg_img_url']; ?>" alt="<?php echo $instance['title'] ; ?>">
      </div>
      <div class="cta-header-title">
        <h4><a href="#<?php echo esc_attr( $instance['cta_ID'] ); ?>" class="volvo1_cta-title medium-text"><?php echo $instance['title']; ?> <i class='fa fa-chevron-right visible-xs'></i></a></h4>
      </div>
    </div>

    <div id="<?php echo $instance['cta_ID']; ?>" class="cta-inner toggle-wrapper">
      <?php echo $instance['cta_desc']; ?>
    </div>

    <?php echo $args['after_widget']; }
  }

  add_action( 'widgets_init', function() {
    register_widget( 'Home_CTA_Widget' );
  });

 ?>
