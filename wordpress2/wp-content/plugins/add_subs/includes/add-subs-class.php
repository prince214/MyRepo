<?php
/**
 * Adds add_subs widget.
 */
class add_subs_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'addsubs_widget', // Base ID
			esc_html__( 'ADD SUBS', 'subs_domain' ), // Name
			array( 'description' => esc_html__( 'Widget to display ADD Subs', 'subs_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];  // add whatever before widget
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title']) . $args['after_title'];
		}



		//Widget Content Output


		echo '<div class="col-sm-12 mb-3">
		<div class="g-ytsubscribe" data-channel="'.$instance['channel'].'" data-layout="'.$instance['layout'].'" data-count="'.$instance['count'].'"></div> </div>';

		echo '<div class="col-sm-12 mb-3">
		<a href="https://twitter.com/intent/tweet?screen_name=MKBHD&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="Default" data-size="large">Tweet to @MKBHD</a></div>';

		

		echo '<div class="col-sm-12 mb-3">
		<div class="fb-like" data-href="'.$instance['link'].'" data-width="" data-layout="'.$instance['fb_layout'].'" data-action="like" data-size="'.$instance['fb_size'].'" data-show-faces="true" data-share="true"></div>
		</div>';

		echo $args['after_widget'];  //// add whatever after widget
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {

		// FORM FOR YOUTUBE
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'ADD SUBS', 'subs_domain' );
		

		$channel = ! empty( $instance['channel'] ) ? $instance['channel'] : esc_html__( 'Google Developers', 'subs_domain' );

		$layout = ! empty( $instance['layout'] ) ? $instance['layout'] : esc_html__( 'Default', 'subs_domain' );

		$count = ! empty( $instance['count'] ) ? $instance['count'] : esc_html__( 'Default', 'subs_domain' );
		

		// FORM FOR FACEBOOK

		$link = ! empty( $instance['link'] ) ? $instance['link'] : esc_html__( 'https://www.facebook.com/WordPress/', 'subs_domain' );
		$fb_layout = ! empty( $instance['fb_layout'] ) ? $instance['fb_layout'] : esc_html__( 'box_count', 'subs_domain' );
		$fb_size = ! empty( $instance['fb_size'] ) ? $instance['fb_size'] : esc_html__( 'small', 'subs_domain' );

		?>

		<!-- FOR YOUTUBE -->
		<!-- TITLE -->
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
			 <?php esc_attr_e( 'Title:', 'subs_domain' ); ?></label> 
		<input class="widefat" 
		id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" 
		name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" 
		type="text" 
		value="<?php echo esc_attr( $title ); ?>">
		</p>

		<!-- CHANNEL -->
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'channel' ) ); ?>">
			 <?php esc_attr_e( 'Channel:', 'subs_domain' ); ?></label> 
		<input class="widefat" 
		id="<?php echo esc_attr( $this->get_field_id( 'channel' ) ); ?>" 
		name="<?php echo esc_attr( $this->get_field_name( 'channel' ) ); ?>" 
		type="text" 
		value="<?php echo esc_attr( $channel ); ?>">
		</p>

		<!-- LAYOUT -->
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'layout' ) ); ?>">
          <?php esc_attr_e( 'Layout:', 'subs_domain' ); ?>
        </label> 

        <select 
          class="widefat" 
          id="<?php echo esc_attr( $this->get_field_id( 'layout' ) ); ?>" 
          name="<?php echo esc_attr( $this->get_field_name( 'layout' ) ); ?>">
          <option value="default" <?php echo ($layout == 'default') ? 'selected' : ''; ?>>
            Default
          </option>
          <option value="full" <?php echo ($layout == 'full') ? 'selected' : ''; ?>>
            Full
          </option>
        </select>
      </p>

      <!-- COUNT -->
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'count' ) ); ?>">
          <?php esc_attr_e( 'Count:', 'subs_domain' ); ?>
        </label> 

        <select 
          class="widefat" 
          id="<?php echo esc_attr( $this->get_field_id( 'count' ) ); ?>" 
          name="<?php echo esc_attr( $this->get_field_name( 'count' ) ); ?>">
          <option value="default" <?php echo ($count == 'default') ? 'selected' : ''; ?>>
            Default
          </option>
          <option value="hidden" <?php echo ($count == 'hidden') ? 'selected' : ''; ?>>
            Hidden
          </option>
        </select>
      </p>


      <!-- FOR FACEBOOK -->
		<!-- LINK -->
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>">
			 <?php esc_attr_e( 'Link:', 'subs_domain' ); ?></label> 
		<input class="widefat" 
		id="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>" 
		name="<?php echo esc_attr( $this->get_field_name( 'link' ) ); ?>" 
		type="text" 
		value="<?php echo esc_attr( $link ); ?>">
		</p>

		<!-- fb_Layout -->
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'fb_layout' ) ); ?>">
          <?php esc_attr_e( 'FB Layout:', 'subs_domain' ); ?>
        </label> 

        <select 
          class="widefat" 
          id="<?php echo esc_attr( $this->get_field_id( 'fb_layout' ) ); ?>" 
          name="<?php echo esc_attr( $this->get_field_name( 'fb_layout' ) ); ?>">
          <option value="standard" <?php echo ($fb_layout == 'standard') ? 'selected' : ''; ?>>
            standard
          </option>
          <option value="box_count" <?php echo ($fb_layout == 'box_count') ? 'selected' : ''; ?>>
            box_count
          </option>
          <option value="button_count" <?php echo ($fb_layout == 'button_count') ? 'selected' : ''; ?>>
            button_count
          </option>
          <option value="button" <?php echo ($fb_layout == 'button') ? 'selected' : ''; ?>>
            button
          </option>
        </select>
      </p>

      <!-- fb_Size -->
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'fb_size' ) ); ?>">
          <?php esc_attr_e( 'FB Size:', 'subs_domain' ); ?>
        </label> 

        <select 
          class="widefat" 
          id="<?php echo esc_attr( $this->get_field_id( 'fb_size' ) ); ?>" 
          name="<?php echo esc_attr( $this->get_field_name( 'fb_size' ) ); ?>">
          <option value="small" <?php echo ($fb_size == 'small') ? 'selected' : ''; ?>>
            small
          </option>
          <option value="large" <?php echo ($fb_size == 'large') ? 'selected' : ''; ?>>
            large
          </option>
        </select>
      </p>


      


		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();

		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		$instance['channel'] = ( ! empty( $new_instance['channel'] ) ) ? sanitize_text_field( $new_instance['channel'] ) : '';

		$instance['layout'] = ( ! empty( $new_instance['layout'] ) ) ? sanitize_text_field( $new_instance['layout'] ) : '';

		$instance['count'] = ( ! empty( $new_instance['count'] ) ) ? sanitize_text_field( $new_instance['count'] ) : '';





		//for facebook
		$instance['link'] = ( ! empty( $new_instance['link'] ) ) ? sanitize_text_field( $new_instance['link'] ) : '';

		$instance['fb_layout'] = ( ! empty( $new_instance['fb_layout'] ) ) ? sanitize_text_field( $new_instance['fb_layout'] ) : '';

		$instance['fb_size'] = ( ! empty( $new_instance['fb_size'] ) ) ? sanitize_text_field( $new_instance['fb_size'] ) : '';

		return $instance;
	}

} // end add_subs widget.