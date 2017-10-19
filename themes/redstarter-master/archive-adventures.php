<?php
/**
* The template for displaying archive pages.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<?php echo "<br>"; ?>
<?php echo "<br>"; ?>
<!-- //<?php echo "archive-adventures.php"; ?> -->

<?php

    // Populate the Product->Terms
    $populateTaxonomies =  get_terms(array(
        "taxonomy" => "activity",
        'hide-empty'=> false,
    ));

?>


    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>
<!--  -->

            <?php if('products'== get_post_type()){ ?>
                <div class="archive-term-nav">
                    <?php foreach($populateTaxonomies as $taxon){ ?>
                            <a href='<?php echo get_term_link($taxon->slug, "activity"); ?>'>
                                <button class="taxon-btn bgcw color-green text-shadow-non box-shadow-non no-border"><?php echo $taxon->name; ?></button>
                            </a>
                    <?php } ?>
                </div>        
            <?php } ?>

<!-- Calling the products in the shop page -->

            <div class="flex wrap-<?php echo get_post_type()?> flex-wrap flex-jus-cen flex-jus-spa-aro ">

                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content', get_post_type() ); ?>                 
                <?php endwhile; ?>
            </div>
            

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<!-- <?php //get_sidebar(); ?> -->
<?php get_footer(); ?>