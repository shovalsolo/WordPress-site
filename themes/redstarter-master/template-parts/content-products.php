<!-- Content products page is SHOP general page for all the items  -->
<!-- <?php //echo "Content-products"; ?> -->

<div class="archive-shop-stuff border-all margin-up-down"> <!--for each product box-->
    <a href="<?php the_permalink();?>">
        <div class="archive-shop-stuff-img"><?php the_post_thumbnail(); ?></div>

        <p class="archive-title">
        <?php the_title(); ?>&nbsp; &hellip;&hellip;&hellip;&hellip;&hellip; &nbsp;
        <span class="archive-shop-stuff-price"><?php the_field('price', $post->ID); ?></span></p>

    </a>
</div>

    
    
	