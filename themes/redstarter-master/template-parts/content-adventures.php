<!-- loops on the blogs adventures -->



<div class="container grid margin-bot">
	
	<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
	
		<div class="adv-img" style="background: url('<?php echo $backgroundImg[0]; ?>');background-size: cover;background-position: center;">
			
		<h2>
			<?php the_title(); ?>
		</h2>
		<a href="<?php the_permalink();?>">
			<button class="adv-btn wcolor border-color-white text-shadow-non box-shadow-non">Read More</button>
		</a>
	

	</div>
</div>


	
