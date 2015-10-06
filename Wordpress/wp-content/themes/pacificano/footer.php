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

?>

<?php wp_footer(); ?>

	<!-- FOOTER -->
	<footer id="contact-us">

		<div class="container-fluid contactDiv splashDiv" id="contact">
    	
	    	<div class="container">
	    		
	    		<div class="row">
	    			
	    			<div class="col-md-6 white contactDivLeft">
	    				
	    				<h1 class="dropShadow">Contact Us</h1>
						<h3 class="dropShadow">Feel free to email, tweet, or view our code.</h3>

						<p class="lead dropShadow"><i class="fa fa-envelope"></i> <a href="mailto:hello@pacificano.com">hello@pacificano.com</a></p>
						<p class="lead dropShadow"><i class="fa fa-twitter"></i> <a href="http://www.twitter.com/pacificano_au">http://www.twitter.com/pacificano_au</a></p>
						<p class="lead dropShadow"><i class="fa fa-github"></i> <a href="http://www.github.com/pacificano">http://www.github.com/pacificano</a></p>

	    			</div>

	    			<!-- Contact Form -->
		    		<div class="col-md-3 col-md-offset-3 newsletterDiv contactDivRight">

	    				<?php 

							echo $result;

						?>

		    			<form method="post" action="22.php#contactForm" id="contactForm">

	                        <p class="lead">Having a question for us?<br/><span>Shoot us a message now!</span></p>

	                        <label for="name">Your first name</label>
	                        <input type="text" name="name" class="contactName" value="">

	                        <label for="email">Your email address</label>
	                        <input type="email" name="email" class="contactName" value=""> 

	                        <label for="query">How can we help you?</label>
	                        <select name="query">
	                            <option>Just saying 'hi'</option>
	                            <option>A question about your services</option>
	                            <option>I'd like to hire you</option>
	                        </select>

	                        <label for="comment">Your message</label>
	                        <textarea name="comment" cols="40" rows="5"></textarea> 

	                        <input type="submit" name="submit" value="Send" class="contactButton">

	                    </form>

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