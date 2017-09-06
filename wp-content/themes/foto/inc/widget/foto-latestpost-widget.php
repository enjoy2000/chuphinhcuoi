<?php

class foto_recentpost_thumb_Widget extends WP_Widget {
	
	function foto_recentpost_thumb_Widget()
	{
		$widget_ops = array('classname' => 'recent-post', 'description' => '');

		$control_ops = array('id_base' => 'foto_recentpost_thumb-widget');

		parent::__construct('foto_recentpost_thumb-widget', 'Foto Recent Post', $widget_ops, $control_ops);
	}
	
	function widget($args, $instance)
	{
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);

		echo balancetags( $before_widget );

		if($title) {
			echo balancetags( $before_title ).sanitize_text_field( $title ).balancetags( $after_title );
		} ?>

			<div class="sidebar-recent-post">
				<?php 
						$latest_post_wid = array(
							'post_type'         => 'post',
							'posts_per_page'	=> $instance['amount'],
							'ignore_sticky_posts' => 1,						        
						);
					$latest_thumb = new WP_Query($latest_post_wid); 
					if ($latest_thumb->have_posts()) : while($latest_thumb->have_posts()) : $latest_thumb->the_post();
					$img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
						$blogwidimg = aq_resize($img_url[0],  100 , 100, true);
				?>
				
					<!-- widget-news -->
					<div class="post-item">
						<div class="post-thumb">
							<?php if ( has_post_thumbnail()) { ?>
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo esc_url( $blogwidimg ); ?>" alt="<?php esc_html_e( 'latestwid-img', 'foto' ); ?>">
							</a>
							<?php }

							else {
								echo '<a href="<?php the_permalink(); ?>">';
								echo '<div class="post-thumb">';
								echo '<img src="'. get_template_directory_uri() .'/img/placeholder-latestpost-widget.jpg" />';
								echo '<div class="overlay"></div></div></a>';
							}

							?>
						</div>
						<div class="latest-post-content">
							<div class="meta">
								<span class="date"><?php echo get_the_date(); ?></span>
							</div>
							<a href="<?php the_permalink(); ?>">
								<h4><?php the_title(); ?></h4>
							</a>
						</div>
					</div>
					<!-- widget-news end -->

				<?php 
					endwhile; wp_reset_postdata(); endif;
				?>
			</div>
		
		<?php echo balancetags( $after_widget );
	}
	
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		if( is_numeric($new_instance['amount']) ){
			$instance['amount'] = $new_instance['amount'];
		} else {
			$new_instance['amount'] = '3';
		}

		return $instance;
	}

	function form($instance)
	{
		$defaults = array('title' => 'Latest Posts', 'amount' => '3');
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		
		<p>
			<label for="<?php echo sanitize_text_field( $this->get_field_id('title') ); ?>"><?php esc_html_e( 'Title', 'foto' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo sanitize_text_field( $this->get_field_id('title') ); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('title') ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" />
		</p>
		<p>
			<label for="<?php echo sanitize_text_field( $this->get_field_id('amount') ); ?>"><?php esc_html_e( 'Amount of Posts', 'foto' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo sanitize_text_field( $this->get_field_id('amount') ); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('amount') ); ?>" value="<?php echo esc_attr( $instance['amount'] ); ?>" />
		</p>
	<?php
	}
}

add_action( 'widgets_init', create_function('', 'return register_widget("foto_recentpost_thumb_Widget");') );