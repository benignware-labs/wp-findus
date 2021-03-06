<?php
// Creating the widget 
class FindUsWidget extends WP_Widget {

  function __construct() {
    parent::__construct(
    // Base ID of your widget
    'findus', 
    
    // Widget name will appear in UI
    __('Findus Widget', 'findus'), 
    
    // Widget description
    array( 'description' => __( 'Create contact maps easily', 'findus' ), ) 
    );
  }
  
  // Creating widget front-end
  // This is where the action happens
  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    $content = isset($instance['content']) ? $instance['content'] : 'null';
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    
    if ( ! empty( $title ) )
      echo $args['before_title'] . $title . $args['after_title'];
   
    // This is where you run the code and display the output
    echo findus_shortcode(array(), nl2br($content));
    
    echo $args['after_widget'];
  }
      
  // Widget Backend 
  public function form( $instance ) {
    
    if ( isset( $instance[ 'title' ] ) ) {
      $title = $instance[ 'title' ];
    } else {
      $title = __( 'New title', 'findus' );
    }
    
    if ( isset( $instance[ 'content' ] ) ) {
      $content = $instance[ 'content' ];
    } else {
      $content = __( 'Content', 'findus' );
    }
    // Widget admin form
  ?>
  <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
  </p>
  <p>
    <label for="<?php echo $this->get_field_id( 'content' ); ?>"><?php _e( 'Content:' ); ?></label> 
    <textarea class="widefat" id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>" type="text"><?php echo esc_attr( $content ); ?></textarea>
  </p>
  <?php 
  }
    
  // Updating widget replacing old instances with new
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['content'] = ( ! empty( $new_instance['content'] ) ) ? $new_instance['content'] : '';
    return $instance;
  }
} // Class wpb_widget ends here

// Register and load the widget
function wp_findus_load_widget() {
  register_widget( 'FindUsWidget' );
}
add_action( 'widgets_init', 'wp_findus_load_widget' );
?>