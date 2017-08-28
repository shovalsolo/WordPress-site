<?php
/**
 * The template for displaying all single adventures posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<p>single-adventures</p>


<br>
<!-- this page is presenting one single adventure -->

<?php echo "single-adventures-page.php"?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<!-- <?php //get_sidebar(); ?> -->
<?php get_footer(); ?>