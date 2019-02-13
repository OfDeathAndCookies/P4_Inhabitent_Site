<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<section class="container">
	<div id="primary" class="content-area about-wrapper">
		<main id="main" class="shop-main" role="main">

			<div class="shop-header">
				<h1 class="page-title-shop">Shop Stuff</h1>
				<div class="shop-menu-wrapper">
					<button class="menu-toggle" aria-controls="shop-menu" aria-expanded="false"><?php echo esc_html( 'shop menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'second', 'menu_id' => 'shop-menu' ) ); ?>
				</div>	
			</div>

			<br>
			<div class="shop-container">
				<div class="product-grid">
					<?php
	  					$args = array( 
							'post_type' => 'product', 
							'order' => 'ASC', 
							'offset' => 0, 
							'posts_per_page' => 16 
						);
					  	$product_post = get_posts( $args ); 
					?>
					<?php foreach ( $product_post as $post ) : setup_postdata( $post ); ?>
						<div class="product-grid-item">
							<div class="product">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							</div>
							<div class="product-info">
								<p class="title"><?php the_title(); ?></p>
								<span class="price"><?php echo CFS()->get( 'price' ); ?></span>	
							</div>
						</div>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>