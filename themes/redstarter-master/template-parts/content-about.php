<?php /* Template Name: About Template */ ?>
<!--  -->

<?php get_header(); ?>

	<?php echo'

			<section class="banner" style="background: linear-gradient(rgba(0,0,0,0.40), rgba(0,0,0,0.40)), url('.get_banner().'); background-size: cover;height: 80vh;">
			 	<div class="overlap-title flex flex-jus-cen flex-ali-cen flex-ali-sel-cen">
				<p class="wcolor"><strong> '. get_the_title() .'</strong></p>
				</div>
			</section>'; 
	?>


        <?php unregister_sidebar( 'sidebar-1' ); ?> <?php// Remove Sidebar from About Us Page ?>

	<?php if(have_posts()) : ?>
    	<?php while(have_posts())  : the_post(); ?>                        
      		<?php the_content(); ?>          
      
    	<?php endwhile; ?>                   
      	<?php else : ?>                       
        <h3><?php _e('404 Error&#58; Not Found'); ?></h3>
	<?php endif; ?>  

<?php get_footer(); ?>