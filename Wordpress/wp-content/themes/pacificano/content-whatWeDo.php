<!-- ICONS OF WHAT WE DO -->
<section id="what-we-do">
	
	<div class="container-fluid servicesDiv splashDiv" id="servicesDiv">
	
    	<div class="container">
    		
    		<div class="row">
    			
    			<?php $loop = new WP_Query( array( 'post_type' => 'services_offered', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="col-md-4">
	    				<div class="whitebgServices center marginBottom">

		    				<?php 

		    				$service_link = get_field('service_link');

		    				if ( !empty($service_link) ) : ?>
		    					<a href="<?php the_field('service_link'); ?>">
		    				<?php endif; ?>

	    					<?php $service_image = get_field('service_image'); ?>
							<img src="<?php echo $service_image['url']; ?>" alt="<?php echo $service_image['alt']; ?>">
		    				<h2><?php the_title(); ?></h2></a>
		    				<p><?php the_field('service_description'); ?></p>

	    				</div>
	    			</div>

				<?php endwhile; wp_reset_query(); ?>

    		</div><!-- .row -->

    	</div>

    </div>

</section>