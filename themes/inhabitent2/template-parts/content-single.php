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
				<h1 class="title"><?php the_title(); ?></h1>
				<span class="price"><?php echo CFS()->get( 'price' ); ?></span>	
				<?php the_content(); ?>
				<div class="social-buttons">
				   <button type="button" class="black-btn"><i class="fab fa-facebook"></i>&nbsp;  Like</button>
				   <button type="button" class="black-btn"><i class="fab fa-twitter"></i>&nbsp;  Tweet</button>
				   <button type="button" class="black-btn"><i class="fab fa-pinterest"></i>&nbsp;  Pin</button>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->

<?php get_footer(); ?>
