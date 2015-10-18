<?php 

// Custom Fields
$homepage_tag			= get_field('homepage_tag');
$homepage_description	= get_field('homepage_description');
$header_feature_image	= get_field('header_feature_image');
$mailing_list_text		= get_field('mailing_list_text');

?>

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
							<div class="response" id="mce-error-response" style="display:none; margin-bottom: 20px; border: solid 2px #ddd; padding: 10px;"></div>
							<div class="response" id="mce-success-response" style="display:none; margin-bottom: 20px; border: solid 2px #ddd; padding: 10px;">Almost finished... We need to confirm your email address. To complete the subscription process, please click the link in the email we just sent you.</div>
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