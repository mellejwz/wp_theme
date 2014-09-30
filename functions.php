<?php
	register_nav_menu( "hoofdmenu", "Het hoofdmenu" );
	register_sidebar( array(
		'name' => 'Hoofd Sidebar',
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s
		">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	wp_enqueue_style( 'simple_theme-style', get_stylesheet_uri() );

?>