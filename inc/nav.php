<?php
/**
 *  Header menu.
 *
 *  Register custom header menu
 */
function prefix_header_menu() {
	register_nav_menu( 'header-menu', __( 'header Menu' ) );
}
add_action( 'init', 'prefix_header_menu' );


/**
 *  Footer menu.
 *
 *  Register custom footer menu
 */
function prefix_footer_menu() {
	register_nav_menus(
		array(
			'footer-menu-our-services' => __( 'Our Services', 'sitename' ),
			'footer-menu'              => __( 'Footer Menu', 'sitename' ),
		)
	);
}
add_action( 'init', 'prefix_footer_menu' );
