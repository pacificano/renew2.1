<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pacificano_v1
 */

// Custom Fields
$contact_description			= get_field('contact_description', 70);
$email_address					= get_field('email_address', 70);
$twitter_handle					= get_field('twitter_handle', 70);
$github_address					= get_field('github_address', 70);

?>

<?php wp_footer(); ?>

	<!-- FOOTER -->
	<footer id="contact-us">

		<div class="container-fluid contactDiv splashDiv" id="contact">
    	
	    	<div class="container">
	    		
	    		<div class="row">
	    			
	    			<div class="col-md-6 white contactDivLeft">
	    				
	    				<h1 class="dropShadow">Contact Us</h1>
						<h3 class="dropShadow"><?php echo $contact_description; ?></h3>

						<p class="lead dropShadow"><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a></p>
						<p class="lead dropShadow"><i class="fa fa-twitter"></i> <a href="http://www.twitter.com/<?php echo $twitter_handle; ?>">http://www.twitter.com/<?php echo $twitter_handle; ?></a></p>
						<p class="lead dropShadow"><i class="fa fa-github"></i> <a href="http://www.github.com/<?php echo $github_address; ?>">http://www.github.com/<?php echo $github_address; ?></a></p>

	    			</div>

	    			<!-- Contact Form -->
		    		<div class="col-md-3 col-md-offset-3 newsletterDiv contactDivRight">

						<div id="contactForm">
							
							<?php echo do_shortcode( '[contact-form-7 id="68" title="Primary Contact Form"]' ); ?>

						</div>

		    		</div>

	    		</div>

	    	</div>

	    </div>
		
	</footer>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!-- WINDOW HEIGHT FOR DIVS -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/windowHeight.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/navigation.js"></script>

    <!-- MailChimp forms -->
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

  </body>
</html>