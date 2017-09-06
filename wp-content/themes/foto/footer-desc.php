<footer id="footer" class="clearfix">

<!-- COPYRIGHT START
============================================= -->

<?php 
$options = get_option('foto_framework');

	$footer_desc = $options['footer_desc'];

	$foto_footer_bg = '';
	if (isset($options['footer_bg'])) {
	$foto_footer_bg = $options['footer_bg'];
	$foto_upload_footer_bg = $foto_footer_bg['url'];

    $foto_footer_button = $options['footer_button'];
    $foto_footer_link = $options['footer_link'];
	}
?>

    <div class="footer-wrap style-2" <?php if(!empty($foto_footer_bg)) { ?> style="background-image: url(<?php echo esc_url( $foto_upload_footer_bg ); ?>);" <?php } ?>>

        <div class="container clearfix">
    		<div class="footer-desc">
    			<?php echo balancetags( $footer_desc ); ?>
    		</div>

            <?php if(!empty($foto_footer_button) || !empty($foto_footer_button)) { ?>
            <div class="footer-button">
                <a href="<?php echo esc_url($foto_footer_link); ?>">
                    <h4 class="button-title"><span><?php echo sanitize_text_field($foto_footer_button); ?></span></h4>
                </a>
            </div>
            <?php } ?>
        </div>

        <div class="copyright clearfix">
            <div class="container">
                <div class="copyright-text">
                    <?php foto_footer_copyright(); ?>
                </div>

        		<div class="social-link">
        			<ul>
        				<?php foto_social_profile(); ?>
        			</ul>
        		</div>
            </div>
    	</div>
    </div>
</footer>
<!-- FOOTER END -->
<script type="text/javascript">
jQuery(window).load(function(){

    var footHeightDesc = jQuery('.footer-desc').height();
    jQuery(".footer-button").css('height', footHeightDesc);
});
</script>

<?php foto_footer_concept1(); ?>

</div>
<!-- MAIN WRAPPER END -->


<?php wp_footer(); ?>

</body>
</html>