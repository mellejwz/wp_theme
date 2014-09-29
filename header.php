<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="script.js"></script><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" media="only screen and (max-width: 9999px) and (min-width: 851px)" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/small.css" media="only screen and (max-width: 850px) and (min-width: 5px)" />
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<div id="container">
		<div id="header"><img id="logo" /><h1><?php bloginfo('name'); ?></h1>
			<div class="mobile_menu-button">&#9776;</div>
			<div class="mobile_menu-button_clicked">&#9776;</div>
			<?php
				$opties = array(
				'container_class' => 'menu',
				'theme_location' => 'hoofdmenu'
			);
			wp_nav_menu( $opties );
			?>
		</div>