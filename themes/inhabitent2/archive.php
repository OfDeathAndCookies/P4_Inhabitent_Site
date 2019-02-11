<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<section class="shop container">
	<div id="primary" class="content-area about-wrapper">
		<main id="main" class="site-main" role="main">
			<h1 class="page-title-shop">Shop Stuff</h1>

			<header class="page-header">
				<nav id="site-navigation" class="shop-navigation" role="navigation">
					<?php get_post_types( array( 
						'post_type' => 'shop_menu',
						 'menu_id' => '22' ) ); ?>
				</nav>
			</header><!-- .page-header -->

			<?php
	  			$args = array( 
					'post_type' => 'product', 
					'order' => 'ASC', 
					'offset' => 0, 
					'posts_per_page' => 16 
				);
			  	$product_post = get_posts( $args ); 
			?>

			<div class="product-grid">
				<?php foreach ( $product_post as $post ) : setup_postdata( $post ); ?>
					<div class="product-grid-item">
						<div class="product">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
						</div>
						<div class="product-info">
							<p class="title"><?php the_title(); ?></p>
							<span class="price"><?php echo CFS()->get( 'price' ); ?></span>	
						</div>
					</div>
				<?php endforeach; wp_reset_postdata(); ?>
			</div>
			</main><!-- #main -->
		</div><!-- #primary -->

	<?php get_footer(); ?>

