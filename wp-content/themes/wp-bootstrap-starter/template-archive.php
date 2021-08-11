<?php
/**
 * Template Name: Archive template
 */

get_header();
?>
<div class="container">
    <div class="row">
        <section id="primary" class="content-area col-12 col-lg-8">
            <div id="main" class="site-main" role="main">

                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'page' );

                  
                endwhile; // End of the loop.
                ?>

            </div><!-- #main -->
        </section><!-- #primary -->        

        <?php get_sidebar();?>

    </div> <!-- .row -->
</div> <!-- .container -->
<?php
get_footer();
