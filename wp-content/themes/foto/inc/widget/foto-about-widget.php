<?php

class foto_author extends WP_Widget {

	function foto_author(){
		$widget_ops = array('classname' => 'foto_author', 'description' => 'Author information badge' );
		parent::__construct('foto_author', 'Foto Author Widget', $widget_ops);
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'author_name' => '', 'text' => '', 'image_author_uri' => false) );
		
		$title 				= strip_tags($instance['title']);
		$author_name 		= strip_tags( $instance['author_name']);
		$text 				= esc_textarea($instance['text']);
		$image_author_uri 	= esc_url( $instance['image_author_uri']);
	?>
		<p>
			<label for="<?php echo sanitize_text_field( $this->get_field_id('title') ); ?>"><?php esc_html_e('Title:', 'foto'); ?></label><br />
			<input class="widefat" type="text" id="<?php echo sanitize_text_field( $this->get_field_id('title') ); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('title') ); ?>" value="<?php echo sanitize_text_field( $title ); ?>">
		</p>
		<hr style="background:#ddd;height: 1px;margin: 15px 0px;border:none;">
		<p>
			<label for="<?php echo esc_url( $this->get_field_id('image_author_uri') ); ?>"><?php esc_html_e('Author image', 'foto'); ?>: <small><?php esc_html_e('Recommended', 'foto'); ?> <?php esc_html_e('1:1 ( 120x120 )', 'foto'); ?></small></label><br />
			<input type="hidden" name="<?php echo sanitize_text_field( $this->get_field_name('image_author_uri') ); ?>" id="<?php echo sanitize_text_field( $this->get_field_id('image_author_uri') ); ?>" value="<?php echo sanitize_text_field( $image_author_uri ); ?>" />
			<input class="button" onClick="foto_open_uploader(this, 'uploaded_author_image')" id="foto_image_upload" value="Upload" />
		</p>
		<p class="uploaded_author_image">
			<img src="<?php echo esc_url( $image_author_uri ); ?> ?>" style="width:100%;">
		</p>
		<hr style="background:#ddd;height: 1px;margin: 15px 0px;border:none;">
	    <p>
      		<label for="<?php echo sanitize_text_field( $this->get_field_id('text') ); ?>"><?php esc_html_e('Bio:', 'foto'); ?></label><br />
			<textarea class="widefat" rows="5" id="<?php echo sanitize_text_field( $this->get_field_id('text') ); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('text') ); ?>"><?php echo balancetags( $text ); ?></textarea>
	    </p>
		<hr style="background:#ddd;height: 1px;margin: 15px 0px;border:none;">
		<p>
			<label for="<?php echo sanitize_text_field( $this->get_field_id('author_name') ); ?>"><?php esc_html_e('Author Name', 'foto'); ?>:</label><br />
			<input class="widefat" type="text" id="<?php echo sanitize_text_field( $this->get_field_id('author_name') ); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('author_name') ); ?>" value="<?php echo sanitize_text_field( $author_name ); ?>">
		</p>

	<?php
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] 			= strip_tags($new_instance['title']);
		$instance['author_name'] 			= strip_tags($new_instance['author_name']);
		$instance['image_author_uri'] 		= $new_instance['image_author_uri'];

		if ( current_user_can('unfiltered_html') )
			$instance['text'] =  $new_instance['text'];
		else
			$instance['text'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['text']) ) );
		$instance['filter'] = isset($new_instance['filter']);
		return $instance;
	}

	function widget( $args, $instance ) {
		extract($args);
		$title 	= apply_filters( 'widget_text', empty( $instance['title'] ) ? '' : $instance['title'], $instance );
		$text 	= apply_filters( 'widget_text', empty( $instance['text'] ) ? '' : $instance['text'], $instance );
		$author_name 	= apply_filters( 'widget_text', empty( $instance['author_name'] ) ? '' : $instance['author_name'], $instance );

		echo balancetags( $before_widget );
		if($title) {
			echo balancetags( $before_title ).sanitize_text_field( $title ).balancetags( $after_title );
		} ?>
		<div class="author-wrap">
				<?php if(!empty($instance['image_author_uri'])) { ?>
				<div class="widget-author-img">
					<img src="<?php echo esc_url($instance['image_author_uri']); ?>" alt="" />
				</div>
				<?php } ?>
			
			<?php if(!empty($text)) { ?>
			<div class="widget-author-detail">
				<?php echo balancetags($text); ?>
			</div>
			<?php } ?>


			<div class="widget-author-name clearfix">
				<?php if(!empty($author_name)) { ?>
					<h4><?php echo sanitize_text_field($author_name); ?></h4>
				<?php } ?>
			</div>

		</div>

		<?php echo balancetags( $after_widget );
	}
}
add_action( 'widgets_init', create_function('', 'return register_widget("foto_author");') );