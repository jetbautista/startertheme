<?php
/**
* Template Name: Fullwidth container
*/

get_header(); ?>
<div class="container">
	<div class="row">
		<section id="primary" class="content-area col-12">
			<div id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'fullwidth' );			

				endwhile; // End of the loop.
				?>

			</div><!-- #main -->
		</section><!-- #primary -->
	</div> <!-- .row -->
</div> <!-- .container -->
<?php
get_footer();
