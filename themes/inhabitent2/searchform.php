<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<a href="#" class="search-toggle" aria-hidden="true">	
			<i class="fa fa-search" o></i>
		</a>
		<label>
			<input type="search" class="search-field" placeholder="Type hit and enter ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<input type="submit" id="search-submit" class="screen-reader-text" value="<?php echo esc_html( 'Search' ); ?>">
	</fieldset>
</form>

<form role="search" method="get" class="search-form" action="https://tent.academy.red/">
	<fieldset>
		<a href="#" class="search-toggle" aria-hidden="true">
			<i class="fa fa-search"></i>
		</a>
		<label style="display: none;">
			<input type="search" class="search-field" placeholder="Type and hit enter..." value="" name="s" title="Search for:">
		</label>
		<input type="submit" id="search-submit" class="screen-reader-text" value="Search">
	</fieldset>
</form>