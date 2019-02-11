<?php get_header(); ?>

<!-- HERO AREA --> 
<section class="site-hero">
	<img class="logo" src= "<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg';?>">
</section> 

<!-- DO / EAT / SLEEP / WEAR -->

<section class="product-types-section container">
	<h2> SHOP STUFF </h2>
	<?php
	   $terms = get_terms( array(
	       'taxonomy' => 'product_type',
	       'hide_empty' => 0,
	   ) );
	   if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
	?>
	   <div class="product-types-block">
	      <?php foreach ( $terms as $term ) : ?>
	         <div class="product-type-wrapper">
	            <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
	            <p><?php echo $term->description; ?></p>
	            <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> STUFF</a></p>
	         </div>
	      <?php endforeach; ?>
	   </div>
	<?php endif; ?>
</section>

<!-- JOURNAL-->
<section class="journal-section container">
	<?php
	   $args = array( 'post_type' => 'post', 'numberposts' => 3 );
	   $product_posts = get_posts( $args ); 
	   if ( ! empty( $product_posts ) && ! is_wp_error( $product_posts ) ) :
	?>
		<h2>INHABITENT JOURNAL</h2>
		<ul class="inhabitent-journal" style="display: flex"> 
			<?php foreach( $product_posts as $post ) : setup_postdata( $post ); ?>
				<li>
				<?php if ( has_post_thumbnail() ) : ?>
						<div class="thumbnail-wrapper">
							<?php the_post_thumbnail( 'large' ); ?>
						</div>
					<?php endif; ?>
					<div class="post-info-wrapper">
						<span class="entry-meta">
							<?php the_date(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
						</span>
						<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
					</div>
					<a class="black-btn" href="<?php the_permalink(); ?>">READ ENTRY</a>
				</li>
			<?php endforeach; wp_reset_postdata(); ?>
		</ul>
	<?php endif; ?>
</section>

<!-- LASTEST ADVENTURES -->
<section class="lastest-adventures container">
	<?php
	   $args = array( 'post_type' => 'adventure', 'numberposts' => 4 );
	   $adventures_posts = get_posts( $args ); 
	   if ( ! empty( $adventures_posts ) && ! is_wp_error( $adventures_posts ) ) :
	?>
		<h2>LATEST ADVENTURES</h2>
		<ul class="adventures-list"> 
			<?php foreach( $adventures_posts as $post ) : setup_postdata( $post ); ?>
				<li class="adventure" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.3)), url('<?php the_post_thumbnail_url(); ?>') no-repeat; background-position: center; background-size: cover; background-repeat: no-repeat;">>
					<div class="story-wrapper">
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="info-wrapper">
								<h3 class="title"><a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a></h3>
								<a class="white-btn" href="<?php the_permalink(); ?>">READ MORE</a>
							</div>
							<div class="picture">
							</div>
						<?php endif ?>
					</div>
				</li>
			<?php endforeach; wp_reset_postdata(); ?>
		</ul>
		<a class="more-btn btn" href="<?php echo get_permalink().'/adventures';?>">MORE ADVENTURES</a>
	<?php endif?>

 </section> <!--end of latest adventures-->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>