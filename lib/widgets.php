<?php
function evos_widgets_init() {
    $widgets[] = array(
        'name' => __( 'Sidebar widget area', 'evos' ),
        'id' => 'sidebar-widget-area',
        'description' => __( 'This is right sidebar widget', 'evos' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    );

    $widgets[] = array(
        'name' => __( 'Footer widget 1', 'evos' ),
        'id' => 'footer-widget-area-1',
        'description' => __( 'This is Footer widget 1', 'evos' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    );

    $widgets[] = array(
        'name' => __( 'Footer widget 2', 'evos' ),
        'id' => 'footer-widget-area-2',
        'description' => __( 'This is Footer widget 2', 'evos' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    );


    $widgets[] = array(
        'name' => __( 'Footer widget 3', 'evos' ),
        'id' => 'footer-widget-area-3',
        'description' => __( 'This is Footer widget 3', 'evos' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    );


    foreach ($widgets as $key => $widget) :
        register_sidebar($widget);
    endforeach;
}
add_action( 'widgets_init', 'evos_widgets_init' );


// Creating the widget 
class evos_social_widget extends WP_Widget {

    private $socials = array('facebook', 'twitter', 'instagram', 'pinterest', 'linkedin', 'youtube');
    private $link_target = array( '_blank' => 'New Tab' );

    function __construct() {
        parent::__construct(
        'evos_social_widget', 
        __('Evos: Social widget', 'evos'), 
        array( 'description' => __( 'This widget displays social links', 'evos' ), ) 
        );
    }

    // Creating widget front-end
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>
        <h3 class="widget-title"><?php echo $instance['title'];?></h3>

        <ul class="icons">
            <?php
                foreach ($this->socials as $key => $social_index) :
                    if( !empty($instance[$social_index]) )
                        printf( '<li class="icons-item"><a href="%s" target="%s"><i class="fa fa-facebook"></i></a></li>', $instance[$social_index], $instance['link_target'] );
                endforeach;
            ?>
        </ul>
        <?php echo $args['after_widget'];?>

        <?php
    }
            
    // Widget Backend
    public function form( $instance ) {
        $title = isset($instance[ 'title' ]) ? $instance[ 'title' ] : '';
        $link_target = isset($instance[ 'link_target' ]) ? $instance[ 'link_target' ] : '';
        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>

        <?php
        /**
        * Social icons fields
        */
        foreach ($this->socials as $key => $social_index) :
            $social_value  = isset($instance[ $social_index ]) ? $instance[ $social_index ] : '';
            ?>
            <p>
                <label for="<?php echo $social_index;?>"><?php _e( "{$social_index}:" ); ?></label> 
                <input class="widefat" id="<?php echo $social_index;?>" name="<?php echo $this->get_field_name( $social_index );?>" type="text" value="<?php echo esc_attr( $social_value ); ?>" />
            </p>
            <?php
        endforeach;
        ?>

        <?php
        /**
        * Link target options
        */
        ?>
        <select name="<?php echo $this->get_field_name( 'link_target' );?>">
            <?php if( $instance[ 'link_target' ] === '_self' || empty($instance[ 'link_target' ]) ) : ?>
                <option value="_self" selected="selected">Same page</option>
            <?php else : ?>
                 <option value="_self">Same page</option>
            <?php endif;?>
            
            <?php 
                foreach ($this->link_target as $key => $value) :
                    printf( '<option value="%s" %s>%s</option>', $key, ($key === $instance[ 'link_target' ]) ? 'selected="selected"' : '', $value );
                endforeach; 
            ?>
        </select>

        <?php
    }
        
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['link_target'] = ( ! empty( $new_instance['link_target'] ) ) ? strip_tags( $new_instance['link_target'] ) : '';

        foreach ($this->socials as $key => $social_index) :
            $instance[$social_index] = ( ! empty( $new_instance[$social_index] ) ) ? strip_tags( $new_instance[$social_index] ) : '';
        endforeach;

        return $instance;
    }
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget() {
    register_widget( 'evos_social_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );