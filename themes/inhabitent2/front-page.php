<?php get_header(); ?>

<!-- HERO AREA --> 
<section class="site-hero">
	<img class="logo" src= "<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg';?>">
</section> 

<!-- DO / EAT / SLEEP / WEAR -->

<section class="product-types-section">
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

<!-- JORNAL-->
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
				<a class="black-btn" href="<?php the_permalink(); ?>">Read Entry</a>
			</li>
		<?php endforeach; wp_reset_postdata(); ?>
	</ul>
<?php endif; ?>

<!-- LASTEST ADVENTURES -->
<section class="lastest-adventures">
	<h2>LATEST ADVENTURES</h2>
	<div class="adventures-blocks">
		<ul class="adventure-list">
         <li>
            <div class="adventure-wrapper">
					<img width="3000" height="2000" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/canoe-girl.jpg';?>" alt="A girl paddling a canoe">                                              
					<div class="story-info">
               	<h3 class="entry-title"><a href="https:">Getting Back to Nature in a Canoe</a></h3>                          
						<a class="white-btn" href="https:">Read More</a>
					</div> 
				</div>
			</li>
			
         <li>
            <div class="adventure-wrapper">
					<img width="3000" height="2000" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/beach-bonfire.jpg';?>" alt="A bonfire with friends on the beach">                                              
					<div class="story-info">
               	<h3 class="entry-title"><a href="https:">A Night with Friends at the Beach</a></h3>                          
						<a class="white-btn" href="https:">Read More</a>
					</div> 
				</div>
			</li>

         <li>
            <div class="adventure-wrapper">
					<img width="3000" height="2000" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/mountain-hikers.jpg';?>" alt="Hikers taking in the view on a mountain">                                              
					<div class="story-info">
               	<h3 class="entry-title"><a href="https:">Taking in the View at Big Mountain</a></h3>                          
						<a class="white-btn" href="https:">Read More</a>
					</div> 
				</div>
			</li>

			<li>
            <div class="adventure-wrapper">
					<img width="3000" height="2000" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/night-sky.jpg';?>" alt="Hikers taking in the view on a mountain">                                              
					<div class="story-info">
               	<h3 class="entry-title"><a href="https:">Star-Gazing at the Night Sky</a></h3>                          
						<a class="white-btn" href="https:">Read More</a>
					</div> 
				</div>
			</li>

		</ul>	
	</div>	
	<p class="see-more"><a href="https://P4_Inhabitent_site/adventures/" class="btn">More Adventures</a></p>
 </section> <!--end of latest adventures-->
<?php //get_sidebar(); ?>
<?php get_footer(); ?>