<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pacificano_v1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		
			<div class="post-details">
                <i class="fa fa-user"></i> <?php the_author(); ?>
                <i class="fa fa-clock-o"></i> <?php the_date(); ?>
                <i class="fa fa-folder-open"></i> <?php the_category(', '); ?>
				<?php the_tags('<i class="fa fa-tags"></i> ', ', ', ''); ?>

                <?php edit_post_link(' Edit', '<i class="fa fa-pencil"></i>', ''); ?>

                <div class="post-comments-badge">
                    <a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number(0, 1, '%'); ?></a>
                </div>

            </div><!-- post-details -->

		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if (has_post_thumbnail() ) { // check for feature image ?>
	
		<div class="post-image">
	        <?php the_post_thumbnail(); ?>
	    </div>

    <?php } ?>

    <div class="post-body">
        <?php the_content(); ?>
    </div>

</article><!-- #post-## -->

