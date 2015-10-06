<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pacificano_v1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Font Awesome icons -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<?php wp_head(); ?>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar-collapse" data-offset="80">
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pacificano' ); ?></a>

	<!-- HEADER -->
    <header class="site-header" role="banner" id="homeDiv">

    	<!-- NAVBAR -->
    	<div class="navbar-wrapper">

    		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

				<div class="container navBarFix">
					
					<div class="navbar-header">

						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">

							<span class="sr-only">Toggle navigation</span>
		    				<span class="icon-bar"></span>
		    				<span class="icon-bar"></span>
		    				<span class="icon-bar"></span>

		    			</button><!-- button -->

		    			<a class="navbar-brand" href="index.html"><img src="assets/img/logo.svg" class="logoImg" alt="Pacificano"></a>

					</div><!-- .navbar-header -->

					<?php 

						wp_nav_menu( array(

							'theme_location' => 'primary',
							'container' => 'nav',
							'container_class' => 'navbar-collpse collapse',
							'menu_class' => 'nav navbar-nav navbar-right'

						));

					?>

				</div><!-- .container -->

    		</nav><!-- .navbar -->
    		
    	</div><!-- .navbar-wrapper -->
    	
    </header>



	<div id="content" class="site-content">
