<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
	if( ! is_front_page() ) { 
		if( get_the_post_thumbnail() ) {  ?>
		    <div class="post-thumbnail text-center">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php }
	} ?>
	
	<?php if( get_field('hide_title') == 0 ) {  ?>
	    <header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
    <?php } ?>

	<div class="entry-content">
		<?php
			the_content();		
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
