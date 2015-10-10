<?php  
/* Template Name: Services */

get_header();

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );

?>

<!-- FEATURE IMAGE -->
<?php if ( has_post_thumbnail() ) { ?>

	<section class="feature-image" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;">

	    <div class="container clearfix">

	        <div class="row">
	            
	            <div class="col-md-8 white">

	                <h1 class="dropShadow">Our Services</h1>

	            </div>

	        </div>

	    </div>
	    
	</section>

<?php } else { ?>

	<section class="feature-image feature-image-default">

	    <div class="container clearfix">

	        <div class="row">
	            
	            <div class="col-md-8 white">

	                <h1 class="dropShadow">Our Services</h1>

	            </div>

	        </div>

	    </div>
	    
	</section>

<?php } ?>




<!-- MAIN CONTENT -->
<div class="container">
    <div class="row" id="primary">
        <div class="col-sm-12" id="content">
            <section class="main-content">

            	<?php while( have_posts() ) : the_post(); ?>
                
	                <h2><?php the_title(); ?></h2>
	                <?php the_content(); ?>

                <?php endwhile; wp_reset_query(); ?>

            </section><!-- main-content -->
        </div><!-- content -->
    </div><!-- primary -->
</div><!-- container -->



<?php get_template_part('content', 'whatWeDo'); ?>
<?php get_footer(); ?>