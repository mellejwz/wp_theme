<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script.js"></script>
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