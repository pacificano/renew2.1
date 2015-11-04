<?php  
/* Template Name: Individual Page */

get_header();

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );

?>

<!-- FEATURE IMAGE -->
<?php if ( has_post_thumbnail() ) { ?>

	<section id="our-services" class="feature-image" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;">
	    <div class="container clearfix">
	        <div class="row">
	            <div class="col-md-8 white">

	                <h1 class="dropShadow"><?php the_title(); ?></h1>

	            </div>
	        </div>
	    </div>
	</section>

<?php } else { ?>

	<section id="our-services" class="feature-image feature-image-default">
	    <div class="container clearfix">
	        <div class="row">
	            <div class="col-md-8 white">

	                <h1 class="dropShadow"><?php the_title(); ?></h1>

	            </div>
	        </div>
	    </div>
	</section>

<?php } ?>




<!-- MAIN CONTENT -->
<div class="container">
    <div class="row" id="primary">
        <main class="col-sm-8" id="content">
            <section class="main-content">

            	<?php while( have_posts() ) : the_post(); ?>
               
	                <?php the_content(); ?>

                <?php endwhile; wp_reset_query(); ?>

            </section><!-- main-content -->
        </main><!-- content -->

        <!-- sidebar -->
		<aside class="col-sm-3 col-sm-offset-1">
			<?php get_sidebar(); ?>
		</aside>

    </div><!-- primary -->
</div><!-- container -->

<!-- modal -->
<?php get_template_part( 'template-parts/content-modal', 'none' ); ?>



<?php get_template_part('content', 'whatWeDo'); ?>
<?php get_footer(); ?>