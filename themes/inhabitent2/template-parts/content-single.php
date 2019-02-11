<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>
<?php get_header(); ?>

<article class="post">
	<div class="entry-content">
		<div class="entry-wrapper">
			<div class="thumbnail">
					<?php the_post_thumbnail('large'); ?>
			</div>
			<div class="product-info">
				<p class="title"><?php the_title(); ?></p>
				<span class="price"><?php echo CFS()->get( 'price' ); ?></span>	
				<?php the_content(); ?>
				<div class="social-buttons">
				   <button type="button" class="black-btn"><i class="fa fa-facebook"></i>Like</button>
				   <button type="button" class="black-btn"><i class="fa fa-twitter"></i>Tweet</button>
				   <button type="button" class="black-btn"><i class="fa fa-pinterest"></i>Pin</button>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->

<?php get_footer(); ?>
