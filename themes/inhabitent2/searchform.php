<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<a href="#" class="search-toggle" aria-hidden="true">	
		<i class="fa fa-search"></i>
	</a>
	<!-- <label>
		<input type="search" class="search-field" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
	</label> -->
	<input type="submit" id="search-submit"  placeholder="Type hit and enter ..." class="screen-reader-text" value="<?php echo esc_html( 'Search' ); ?>">
</form>