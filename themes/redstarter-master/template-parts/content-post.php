<!-- getting the journals blogs to front page -->

<div class="jor-box border-all">

		<div class="jor-thumb "><?php the_post_thumbnail(); ?></div>

		<!-- <?php echo "<br>"; ?> -->
		<div class="border-color-top">

			<div class="jor-time gcolor font-sml"><?php   the_time('j F Y'); ?></div> 

			<div class="jor-title font-medi color-green"><p><strong><?php the_title(); ?></strong></p></div>

			<div>
			<a href="<?php   the_permalink(); ?> "><button class="jor-btn bgc-transparent text-shadow-non box-shadow-non border-color-black">Read Entry</button> </a>
			</div>

		</div>

</div>