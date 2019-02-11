<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area about-wrapper">
	<main id="main" class="site-main" role="main">
		<h1 class="page-title">Shop Stuff</h1>

		<header class="page-header">
			<nav id="site-navigation" class="main-navigation shop-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'shop_menu', 'menu_id' => 'shop-menu' ) ); ?>
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

		<?php foreach ( $product_post as $post ) : setup_postdata( $post ); ?>
			<div class="product">
				<div class="product-img">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
				</div>
				<div class="product-title">
					<h2 class="product-entry"><?php the_title(); ?></h2><span class="price-product">$<?php echo CFS()->get( 'price' ); ?>.00</span>
				</div>	
			</div>
		<?php endforeach; wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>


<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        	<div class="container">
   				<header class="page-header">
					<?php 
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->
				<div class="product-grid">
					<div class="product-grid-item">
						<div class="thumbnail-wrapper">
                    		<ul class="product-type-list">
                        		<li>
									<p><a src= "<?php $page_id = 18; 
									   				  $uri = get_page_uri($page_id);
													  echo '<a href="'. $uri .'">Do</a>';
												?>">

                 <a href="https://tent.academy.red/product/beach-tent/" rel="bookmark"><img width="640" height="480" src="https://tent.academy.red/wp-content/uploads/2016/04/beach-tent-1024x768.jpg" class="attachment-large size-large wp-post-image" alt="A tent designed for the beach" srcset="https://tent.academy.red/wp-content/uploads/2016/04/beach-tent-1024x768.jpg 1024w, https://tent.academy.red/wp-content/uploads/2016/04/beach-tent-300x225.jpg 300w, https://tent.academy.red/wp-content/uploads/2016/04/beach-tent-768x576.jpg 768w" sizes="(max-width: 640px) 100vw, 640px"></a>
                  </div>
                  
                  <div class="product-info">
                     <h2 class="entry-title">Beach Tent</h2>                     <span class="price">$155.00</span>
                  </div>
               </div>

   			            </div>
         </div><!-- .container -->

		</main><!-- #main -->
	</div>
