<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="content" class="site-content">
    <div id="primary" class="content-area-find-us">
        <main id="main" class="site-main" role="main">	
			<?php $args = array(
  				'post_type' => 'post',
				'order' => 'DSC',
				'offset' => 0,
    			'posts_per_page' => 3,
					);
				$journal_posts = get_posts($args);?>

		<ul class="main_posts">
        	<?php foreach ($journal_posts as $post): setup_postdata($post);?>
					 <?php $num_comments = get_comments_number();
   						 if (comments_open()) {
       						 if ($num_comments == 0) {
        	 					   $comments = __('0 Comments');
								} elseif ($num_comments > 1) {
									$comments = $num_comments . __(' Comments');
								} else {
									$comments = __('1 Comment');
								}
   							 $write_comments = $comments;
					} else {
						$write_comments = __('Comments are off for this post.');
					}?>
				<li>
					<div class="post_header" >
						<h2 class="entry-title"><a href="<?php the_permalink();?>" class="post_title"><?php the_title();?></a></h2>
						<?php echo get_the_post_thumbnail($post); ?>
						<span class="post-info"><?php echo get_the_time('Y.m.d') ?> / <?php echo $write_comments ?>/ <?php echo 'BY' . the_author_meta( 'nickname', $current_user->ID ); ?></span>
					</div>
					
					<div class="post_content">
						<?php the_excerpt(); ?>
						 <a href="<?php the_permalink();?>" class="read_more_btn">READ MORE →</a>
			 		</div>
				</li>
        	<?php endforeach; wp_reset_postdata();?>
		</ul>
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
                        <h2 class="widget-title">Business Hours</h2>

                        <p><span class="day-of-week">Monday-Friday:</span> 9am to 5pm </p>
                        <p><span class="day-of-week">Saturday:</span> 10am to 2pm </p>
                        <p><span class="day-of-week">Sunday:</span> Closed </p>
                    </aside>

                <aside id="archives-2" class="widget widget_archive">
    <h2 class="widget-title">Archives</h2>		
    <ul>
	    <li><a href="https://tent.academy.red/2016/04/">April 2016</a></li>
	    <li><a href="https://tent.academy.red/2016/03/">March 2016</a></li>
	</ul>
                </aside>
                        </div>
                    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>