<!-- For presenting one product when you choose one product in a category-->

<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<?php echo "<br>"?>
<?php echo "single-product"?>
<?php echo "<br>"?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php echo "<br>"?>
			<div class="flex">
				<div class="sing-img">
					<?php the_post_thumbnail(); ?>				
				</div>
				<div class="sing-content">
					<div><h3 class="light-brown-title"><?php the_title(); ?></h3></div>
					<div><strong>$<?php the_field('price', $post->ID); ?></strong></div>
					<div><?php the_content(); ?></div>
					<div><button class="sing-btn margin-left-right" >Like</button><button class="sing-btn margin-left-right">Tweet</button><button class="sing-btn margin-left-right">Pin</button></div>
				</div> 
			</div>
			<!-- <?php //the_post_navigation(); ?> -->

	<?php endwhile; // End of the loop. ?>

	<?php get_footer(); ?>