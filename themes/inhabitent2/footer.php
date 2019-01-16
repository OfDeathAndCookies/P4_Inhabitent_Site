<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
			</div>

			<footer id="colophon" class="footer" role="contentinfo"> 

				<section class="infos-and-logo">

					<div class="site-info"> 
						<div class="info1">
							<p class="titles-info"> CONTACT INFO </p>
							<p> info@inhabitent.com </p>	
							<p> 778-456-7891 </p>	
							<i class="fab fa-facebook"></i>
							<i class="fab fa-twitter-square"></i>
							<i class="fab fa-google-plus-square"></i>
						</div>

						<div class="info2">
							<p class="titles-info"> BUSINESS HOURS </p>
							<p> Monday-Friday: 9am to 5pm </p>	
							<p> Saturday: 10am to 2pm </p>
							<p> Sunday: Closed </p>	
						</div>

						<div class="footer-logo">
							<img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-text.svg';?>">
						</div>
					</div> <!--end site-info-->

					<div class="copyright">
						<p> COPYRIGHT &copy; <?php echo date('Y');?> INHABITENT</p> 
					</div>
				</section> <!--end infos-and-logo-->
			</footer>

		</div>

		<?php wp_footer(); ?>

	</body>
</html>
