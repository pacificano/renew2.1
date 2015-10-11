<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Pacificano_v1
 */

get_header(); ?>

	<div class="container">
	    <div class="row" id="primaryPost">

	        <main id="content" class="col-sm-9">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<?php the_post_navigation(); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // End of the loop. ?>

			</main><!-- main -->
			
			<!-- sidebar -->
			<aside class="col-sm-3">

				<?php get_sidebar(); ?>
			</aside>

		</div><!-- primaryPost -->
	</div><!-- container -->



<?php get_footer(); ?>
