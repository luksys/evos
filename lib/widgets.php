<?php
function evos_widgets_init() {
 
    register_sidebar( array(
        'name' => __( 'Sidebar widget area', 'evos' ),
        'id' => 'sidebar-widget-area',
        'description' => __( 'This is right sidebar widget', 'evos' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );      
}
add_action( 'widgets_init', 'evos_widgets_init' );


// Creating the widget 
class evos_social_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
        'evos_social_widget', 
        __('Evos: Social widget', 'evos'), 
        array( 'description' => __( 'This widget displays social links', 'evos' ), ) 
        );
    }

    // Creating widget front-end
    // This is where the action happens
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
       
        ?>

        <ul class="icons">
            <li class="icons-item"><a href="facebook"><i class="fa fa-facebook"></i></a></li>
            <li class="icons-item"><a href="twitter"><i class="fa fa-twitter"></i></a></li>
            <li class="icons-item"><a href="instagram"><i class="fa fa-instagram"></i></a></li>
            <li class="icons-item"><a href="pinterest"><i class="fa fa-pinterest-p"></i></a></li>
            <li class="icons-item"><a href="linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li class="icons-item"><a href="youtube"><i class="fa fa-youtube"></i></a></li>
        </ul>

        <?php

        echo $args['after_widget'];
        ?>
       
        <?php
    }
            
    // Widget Backend
    public function form( $instance ) {
        $title      = isset($instance[ 'title' ]) ? $instance[ 'title' ] : '';
        $facebook   = isset($instance[ 'facebook' ]) ? $instance[ 'facebook' ] : '';
        $twitter    = isset($instance[ 'twitter' ]) ? $instance[ 'twitter' ] : '';
        $instagram  = isset($instance[ 'instagram' ]) ? $instance[ 'instagram' ] : '';
        $pinterest  = isset($instance[ 'pinterest' ]) ? $instance[ 'pinterest' ] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e( 'Facebook:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e( 'Twitter:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo esc_attr( $twitter ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e( 'Instagram:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" type="text" value="<?php echo esc_attr( $instagram ); ?>" />
        </p>
          <p>
            <label for="<?php echo $this->get_field_id( 'pinterest' ); ?>"><?php _e( 'Pinterest:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" type="text" value="<?php echo esc_attr( $pinterest ); ?>" />
        </p>
        <?php 
    }
        
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';
        $instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';
        $instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? strip_tags( $new_instance['instagram'] ) : '';
        $instance['pinterest'] = ( ! empty( $new_instance['pinterest'] ) ) ? strip_tags( $new_instance['pinterest'] ) : '';
        return $instance;
    }
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget() {
    register_widget( 'evos_social_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );