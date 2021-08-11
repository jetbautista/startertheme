<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<div id="main" class="site-main" role="main">
	<?php if( get_field('hide_title') == 0 ) {  ?>
	    <header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
    <?php } ?>
	<?php
	while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/content', 'fullwidth' );

	endwhile; // End of the loop.
	?>

</div><!-- #main -->

<?php
get_footer();
