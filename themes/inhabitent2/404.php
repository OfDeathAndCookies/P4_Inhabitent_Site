<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="content" class="site-content">
    <div id="primary" class="content-area-find-us">
        <main id="main" class="site-main" role="main">	
		<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html( 'Oops! That page can&rsquo;t be found.' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php echo esc_html( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( red_starter_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php echo esc_html( 'MOST USED CATEGORIES' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 5,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

					<?php
						$archive_content = '<p>' . sprintf( esc_html( 'Try looking in the monthly archives. %1$s' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
        </main><!-- #main -->
    </div><!-- #primary -->
            
    <div id="secondary" class="widget-area" role="complementary">
        <aside id="text-2" class="widget widget_text">
            <h2 class="widget-title">Contact Info</h2>			
            <div class="textwidget">
                <p class="contact">
                <i class="fa fa-phone"></i>
                <span><a href="tel:7784567891">778-456-7891</a></span></p>
                <p class="contact"><i class="fa fa-envelope"></i>
                <span><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></span></p>
                <p class="contact"><i class="fa fa-map-marker"></i>
                <span>1490 W Broadway<br>Vancouver, BC V6H 1H5</span></p>
            </div>
        </aside>
        
        <aside id="tent-biz-hours-2" class="widget tent-biz-hours-class">
			<div class="info2">
				<h3 class="titles-info2"> BUSINESS HOURS </h3>
				<p><span> Monday-Friday:</span> 9am to 5pm </p>	
				<p><span> Saturday: </span> 10am to 2pm </p>
				<p><span>Sunday:</span> Closed </p>	
			</div>
        </aside>
        <aside id="archives-2" class="widget widget_archive">
             <h2 class="widget-title">Archives</h2>		
            <ul>
	            <li><a>April 2016</a></li>
	            <li><a>March 2016</a></li>
	        </ul>
        </aside>
    </div>
</div>
<?php get_footer(); ?>