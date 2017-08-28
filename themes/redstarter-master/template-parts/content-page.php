<?php
/**
* Template part for displaying page content in page.php.
*
* @package RED_Starter_Theme
*/
//echo "content-page.php";

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        
    </header><!-- .entry-header -->

    <br>
    <div class="flex">
        <div class="text-ali-le">
        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3096.3197090995554!2d-123.13625366154886!3d49.263432382649704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490+W+Broadway%2C+Vancouver%2C+BC+V6H!3m2!1d49.2634483!2d-123.13816829999999!5e0!3m2!1siw!2sca!4v1503704040949" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        

         <div class="entry-content">
                <h2><?php //echo "title1"; ?></h2>

                <?php the_content(); ?>

                <?php
                if (get_field('title_1')) {?>
                    <h2><?php echo get_field('title_1'); ?></h2>
                <?php
                } ?>

                <?php
                if (get_field('content_1')) {?>
                    <p><?php echo get_field('content_1'); ?></p>
                <?php
                } ?>

                <?php
                if (get_field('title-2')) {?>
                    <h2><?php echo get_field('title_2'); ?></h2>
                <?php
                } ?>

                <?php
                if (get_field('content_2')) {?>
                    <p><?php echo get_field('content_2'); ?></p>
                <?php
                } ?>

                <?php
                if (get_field('title_3')) {?>
                    <h2><?php echo get_field('title_3'); ?></h2>
                <?php
                } ?>

                <?php
                if (get_field('content_3')) {?>
                    <p><?php echo get_field('content_3'); ?></p>
                <?php
                } ?>

                <?php
                if (get_field('contact_form')) {?>
                    <p><?php echo get_field('contact_form'); ?></p>
                <?php
                } ?>
        </div>


        </div>

       

            <div>
                <?php if ( is_active_sidebar( 'side' ) ) : ?>
                    <div id="sidebar2" class="flex flex-dir-col sidebar-widget" role="complementary">
                        <?php dynamic_sidebar( 'side' ); ?>
                    </div>
                <?php endif; ?>
            </div>


    </div><!-- .entry-content -->
</article><!-- #post-## -->