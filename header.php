<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

	<!-- container -->
	<div class="container">

		<!-- site-header -->
		<header class="site-header">
			<img class="logo" src="http://trevosepetrescue.copacubanana.com/wp-content/uploads/sites/2/2016/10/DogCatLogo.jpg" width="150px" height="140px"/>
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description'); ?></h5>

			<nav class="site-nav clearfix">

			<?php

			$args = array(
				'theme_location' => 'primary'
			);

			?>
			<?php wp_nav_menu( $args ); ?>
			
			</nav>


		</header><!-- /site-header -->

