<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-item'); ?>>
<div class="wrapper">

	<div class="post-content">

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
					<span class="author">by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author_meta( 'display_name' ); ?></a></span>
					<span><?php the_time( get_option( 'date_format' ) ); ?></span>
					<span class="comments"><?php comments_number( '0', '1', '%' ); ?> <?php esc_html_e( 'Comments', 'foto' ); ?></span>
				</div>
				<div class="bord"></div>
			</div>
			<div class="excerpt">
				<?php the_excerpt(); ?>
			</div>
		</div>

		<div class="content-bottom clearfix">
			<div class="button">
				<a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read Article', 'foto' ); ?></a>
			</div>
			<div class="share">
				<?php foto_social_share(); ?>
			</div>
		</div>
	</div>

</div>
</article>