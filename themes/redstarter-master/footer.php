<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->
			
			
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info flex">
					
					<div class="contact-info">
					<!-- calling the contact-info sidebar container -->
					<?php dynamic_sidebar('contact-info')?>
					</div>

					
					<div class="business-hours">
					<!-- calling the business-hours sidebar container -->
					<?php dynamic_sidebar('business-hours')?>	
					</div> 

					<div class="empty">
						<ul class="list-deco">
							<li><p></p></li>
							<li><div></div><div></div></li>
							<li><div></div><div></div></li>
							<li><div></div><div></div></li>
						</ul>
					</div>

					<div class="bottom-logo flex flex-ali-cen">
						<ul class="list-deco">
							<li>
							<?php dynamic_sidebar('footer-logo')?>
							</li>
						</ul>
					</div>
					<!-- <div>
						<a href="<?php echo esc_url( 'https://wordpress.orgeeee/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
					</div> -->
				</div><!-- .site-info -->
				<div class="flex flex-jus-cen wcolor"><?php dynamic_sidebar('copy-right')?></div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
