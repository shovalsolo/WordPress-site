<?php
/**
 * The template for displaying all single adventures posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<br>
<!-- this page is presenting one single blog(journal) post  -->

<?php echo "single-post(journal)-page.php"?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
			
			<div class="adv-img" style="background: url('<?php echo $backgroundImg[0]; ?>');background-size: cover;background-position: center;">
				<div><h3 class="wcolor bgc-green sing-jor-title"><?php the_title(); ?></h3></div>
			<div class="flex flex-jus-end">
				<div class="bgc-green  wcolor"><?php   the_time('j F Y'); ?></div>
			</div>
			</div>
			<div><?php the_content(); ?></div>
			
			<h6 class="white"><?php red_starter_posted_on(); ?>&nbsp; / &nbsp;<span class=""><?php red_starter_comment_count(); ?></span>&nbsp; / &nbsp;<span><?php red_starter_posted_by(); ?></span></h6>

			<div class="margin-up-down"><button class="sing-btn margin-left-right" >Like</button><button class="sing-btn margin-left-right">Tweet</button><button class="sing-btn margin-left-right">Pin</button></div>

			<h6><?php red_starter_entry_footer(); ?></h6>

			<?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template(); // goes to comments.php
                endif;
           	?>
           	


			

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<!-- <?php //get_sidebar(); ?> -->
<?php get_footer(); ?>