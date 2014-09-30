<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
	<link rel="stylesheet" media="screen and (min-width: 721px)" href="<?php bloginfo('template_url'); ?>/css/normal.css" />
	<link rel="stylesheet" media="screen and (max-width: 720px)" href="<?php bloginfo('template_url'); ?>/css/small.css" />
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<div id="container">
		<div id="header"><div id="logo"></div><h1><?php bloginfo('name'); ?></h1>
			<div class="mobile_menu-button">Menu</div>
			<div class="mobile_menu-button_clicked">Sluiten</div>
			<?php
				$opties = array(
				'container_class' => 'menu',
				'theme_location' => 'hoofdmenu'
			);
			wp_nav_menu( $opties );
			?>
		</div>