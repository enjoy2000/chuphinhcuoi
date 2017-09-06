<article  id="page-<?php the_ID(); ?>" <?php post_class( 'page'); ?>>

<div class="page-content clearfix">
 
	<?php the_content(); ?>
	<?php wp_link_pages(); ?>
                     
</div><!-- page-content -->    

	<div class="page-comment">
	<?php 

	if ( class_exists( 'Redux' ) ) {

		$options = get_option('foto_framework');
		$foto_allow_comment = $options['allow_comment'];

		if( $foto_allow_comment == '1' ) {
		foto_comment_reply(); 
		if ( comments_open() || '0' != get_comments_number() ) comments_template(); 

	} }
	else {
		foto_comment_reply(); 
		if ( comments_open() || '0' != get_comments_number() ) comments_template();
	}
	?>
	</div>

</article><!-- #page<?php the_ID(); ?> -->