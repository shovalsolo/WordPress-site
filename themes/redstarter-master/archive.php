<?php
/**
* The template for displaying archive pages.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<p>archive</p>

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

            <header class="page-header">
                <?php
                    //the_archive_title( '<h1 class="page-title">', '</h1>' );
                    //the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
            </header><!-- .page-header -->

            <?php /* Start the Loop */ ?>    

            <?php /* Start the Loop */ ?>

<!-- Getting the buttons of - eat - sleep - wear - do  -->

            <?php if('products'== get_post_type()){ ?>
            <h2 class="text-ali-c">SHOP STUFF</h2><br>
                <div class="archive-term-nav flex flex-ali-cen flex-jus-cen ">
                <br>
                    <?php foreach($populateTaxonomies as $taxon){ ?>
                            <a href='<?php echo get_term_link($taxon->slug, "activity"); ?>'>
                                <button class="taxon-btn bgcw color-green text-shadow-non box-shadow-non no-border margin-left-right-lar"><?php echo $taxon->name; ?></button>
                            </a>
                            <br>
                    <?php } ?>
                    <br>
                </div>        
            <?php } ?>

<!-- Calling the products in the shop page -->

            <div class="flex wrap-<?php echo get_post_type()?> flex-wrap flex-jus-cen flex-jus-spa-aro border-color-top-dotted">

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