<?php  
/* Template Name: Main Service Page */

get_header();

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );

?>

<!-- FEATURE IMAGE -->
<?php if ( has_post_thumbnail() ) { ?>

	<section id="our-services" class="feature-image" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;">
	    <div class="container clearfix">
	        <div class="row">
	            <div class="col-md-8 white">

	                <h1 class="dropShadow">Our Services</h1>

	            </div>
	        </div>
	    </div>
	</section>

<?php } else { ?>

	<section id="our-services" class="feature-image feature-image-default">
	    <div class="container clearfix">
	        <div class="row">
	            <div class="col-md-8 white">

	                <h1 class="dropShadow">Our Services</h1>

	            </div>
	        </div>
	    </div>
	</section>

<?php } ?>



<?php get_template_part('content', 'whatWeDo'); ?>
<?php get_footer(); ?>