<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Pacificano_v1
 */

get_header(); ?>

	<!-- FEATURE IMAGE -->
	<section class="feature-image feature-image-default-alt">
	    <div class="container clearfix">
	        <div class="row">
	            
	            <div class="col-md-8 white">

					<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'pacificano' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

	            </div>

	        </div>
	    </div>
	</section>


	<div class="container">
		<div id="primary" class="row">
			<main id="content" class="col-sm-9">

				<?php if ( have_posts() ) : ?>

					

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );
						?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- main -->

			<!-- aside -->
			<aside class="col-sm-3">
				
				<?php get_sidebar(); ?>

			</aside>

		</div><!-- primary -->
	</div><!-- container -->

<?php get_footer(); ?>