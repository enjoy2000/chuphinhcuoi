<article  id="post-<?php the_ID(); ?>" <?php post_class( 'post-item'); ?>>
<div class="wrapper">

	<div class="single-post-content clearfix">
	<?php if ( has_post_thumbnail()) { ?>
		<div class="post-image">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		</div><!-- thumbnail-->
	<?php } ?> 
		
		<div class="inner-content">
		<div class="heading-block">
			<div class="meta-top"><?php the_category(); ?></div>
			<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
			<div class="post-meta">
				<span class="date"><?php the_time( get_option( 'date_format' ) ); ?></span>
				<span class="author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author_meta( 'display_name' ); ?></a></span>
				<span class="comments"><?php comments_number( '0', '1', '%' ); ?> <?php esc_html_e( 'Comments ', 'foto' ); ?></span>
			</div>			
			<div class="bord"></div>
		</div>
		<div class="content">
			<?php the_content();?>
			<?php wp_link_pages(); ?>
		</div>
		
		</div>

		<div class="content-bottom">
			<div class="meta-bottom"><?php esc_html_e( 'Tags: ', 'foto' ); ?><span><?php the_tags('',', ',''); ?></span></div>
			<div class="share">
				<?php foto_social_share(); ?>
			</div>
		</div>

		<div class="comment-section">
		<?php 
			foto_comment_reply(); 
			if ( comments_open() || '0' != get_comments_number() ) comments_template(); 
		?>
		</div>
	</div>

</div>
</article><!-- #post-<?php the_ID(); ?> -->

