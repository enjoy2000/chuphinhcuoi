<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_html_e( 'Search here...', 'foto' ); ?>" />
<input type="submit" class="submit search-button" value="<?php esc_html_e( 'Submit', 'foto' ); ?>" />
</form>