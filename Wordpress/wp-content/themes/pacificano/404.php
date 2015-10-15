<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Pacificano_v1
 */

get_header(); ?>

	<!-- FEATURE IMAGE -->
	<section class="feature-image feature-image-default">
	    <div class="container clearfix">
	        <div class="row">
	            <div class="col-sm-12 white">

	                <h1 class="dropShadow">Bummer! That page can't be found.</h1>

	            </div>
	        </div>
	    </div>
	</section>



	<!-- FIND CONTENT FOR USER -->
	<div class="container">
		<div id="primary" class="row">
			<main id="content" class="col-sm-8">
				<div class="error-404 not-found">
					<div class="page-content">
						<h2>No worries! Let's get you back on track.</h2>

						<!-- Services -->
						<p>Perhaps you were looking for a specific service?</p>
						
						<?php $loop = new WP_Query( array( 'post_type' => 'services_offered', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

						<div class="resource-row clearfix">

		                	<?php while($loop->have_posts()) : $loop->the_post(); ?>
		                	<?php 
			                	$service_image = get_field('service_image');
								$service_link = get_field('service_link');
								$service_description = get_field('service_description'); 
							?>
			                    
	                        <h3><a href="<?php echo $service_link; ?>"><?php the_title(); ?></a></h3>
	                        <?php echo $service_description; ?>

		                    <?php endwhile; wp_reset_query(); ?>
		                    <br/><br/>

		                </div><!-- resource-row clearfix -->

						<!-- categories -->
		                <h3>Categories</h3>
		                <p>Or maybe a popular category?</p>

		                <div class="widget widget_categories">
		                	<h4 class="widget-title">Most Used Categories</h4>
		                	<ul>
		                		<?php wp_list_categories(array(
		                			'orderby' => 'count',
		                			'order' => 'DESC',
		                			'show_count' => 1,
		                			'title_li' => '',
		                			'number' => 10
		                		)); ?>
		                	</ul>
		                </div> <!-- widget -->

		                <!-- archives -->
		                <h3>Archives</h3>
		                <p>You can always sort through our archives...</p>
		                <?php the_widget('WP_Widget_Archives', 'title=Our Archives', 'before_title=<h4 class="widgettitle">&after_title=</h4>'); ?>

						<p>...or just head back to the <a href="<?php echo esc_url(home_url('/')); ?>">home page</a></p>
					</div><!-- content -->
				</div>
			</main>

			<!-- sidebar -->
			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>

		</div>
	</div>



<?php get_template_part('content', 'whatWeDo'); ?>
<?php get_footer(); ?>