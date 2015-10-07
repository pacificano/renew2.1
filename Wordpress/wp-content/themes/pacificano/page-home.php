<?php
/*
	Template Name: Home Page
 */

// Custom Fields
$homepage_tag			= get_field('homepage_tag');
$homepage_description	= get_field('homepage_description');
$header_feature_image	= get_field('header_feature_image');
$mailing_list_text		= get_field('mailing_list_text');

$about_us_body			= get_field('about_us_body');



get_header(); ?>

	

	<!-- HERO -->
    <section id="hero" class="container-fluid landingDiv splashDiv" style="background-image: url('<?php echo $header_feature_image['url']; ?>');">

    	<article>

    		<div class="container clearfix">

    			<div class="row">
    				
    				<div class="col-md-6 white landingDivLeft">

    					<h1 class="dropShadow"><?php echo $homepage_tag;  ?></h1>
						<h3 class="dropShadow"><?php echo $homepage_description; ?></h3>

    				</div><!-- #landingDivLeft -->

    				<!-- Newsletter Sign Up -->
		    		<div class="col-md-3 col-md-offset-3 newsletterDiv">

		    			<form action="http://pacificano.us11.list-manage.com/subscribe/post?u=9e3e430d9b1934531b447d0aa&amp;id=5658fa2591" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

							<p class="lead"><?php echo $mailing_list_text; ?><br/><span>Subscribe to our mailing list.</span></p>

							<label for="mce-FNAME">Your first name</label>
							<input type="text" value="" name="FNAME" class="newsletterName" id="mce-FNAME">

							<label for="mce-EMAIL">Your email address</label>
							<input type="email" value="" name="EMAIL" class="required email newsletterEmail" id="mce-EMAIL">

							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>   

							<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;"><input type="text" name="b_9e3e430d9b1934531b447d0aa_5658fa2591" tabindex="-1" value=""></div>

						    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button newsletterButton">

							<p class="newsletterTextSmall">We will never send you spam or share your information.<br /> You can unsubscribe at any time.</p>

						</form><!-- form -->

		    		</div><!-- #newsletterDiv -->

    			</div><!-- .row -->
    			
    		</div><!-- .container -->

    	</article>

    </section><!-- #hero -->



	<!-- OUR SERVICES -->
	<section id="our-services">

		<div class="container aboutDiv">
    	
	    	<div class="row">
	    		
	    		<div class="col-md-12">
	    			
	    			<h2>Our Services</h2>

					<p class="lead"><?php echo $about_us_body; ?></p>

	    		</div>

	    	</div>

	    </div>
		
	</section>



	<!-- ICONS OF WHAT WE DO -->
	<section id="what-we-do">
		
		<div class="container-fluid servicesDiv splashDiv" id="servicesDiv">
    	
	    	<div class="container">
	    		
	    		<div class="row">
	    			
	    			<div class="col-md-4">
	    				<div class="whitebgServices center marginBottom">
	    					<a href="hosting.html">
	    					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/01-hosting.png">
		    				<h2>Hosting</h2></a>
		    				<p>We offer a range of affordable and reliable hosting services.</p>
	    				</div>
	    			</div>

	    			<div class="col-md-4">
	    				<div class="whitebgServices center marginBottom">
	    					<a href="domains.html">
	    					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/02-domains.png">
		    				<h2>Domains</h2></a>
		    				<p>We can help you secure and register your business's domain name.</p>
	    				</div>
	    			</div>

	    			<div class="col-md-4">
	    				<div class="whitebgServices center marginBottom">
	    					<a href="wordpress.html">
	    					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/03-wordpress.png">
		    				<h2>Wordpress</h2></a>
		    				<p>We are experts in building Wordpress CMS's and blogs, tailored just for you.</p>
	    				</div>
	    			</div>

	    			<div class="col-md-4">
	    				<div class="whitebgServices center marginBottom">
	    					<a href="mobile.html">
	    					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/04-mobile.png">
		    				<h2>Mobile/Web Apps</h2></a>
		    				<p>Looking to bring your business to a mobile audience? We can help you.</p>
	    				</div>
	    			</div>

	    			<div class="col-md-4">
	    				<div class="whitebgServices center marginBottom">
	    					<a href="javascript.html">
	    					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/05-javascript.png">
		    				<h2>Javascript</h2></a>
		    				<p>We absolutely adore Javascript and would love to help you with your project.</p>
	    				</div>
	    			</div>

	    			<div class="col-md-4">
	    				<div class="whitebgServices center marginBottom">
	    					<a href="seo.html">
	    					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/06-search.png">
		    				<h2>SEO</h2></a>
		    				<p>We can give you advice and tips on how to improve your business's web ranking.</p>
	    				</div>
	    			</div>

	    		</div><!-- .row -->

	    	</div>

	    </div>

	</section>



<?php get_footer(); ?>