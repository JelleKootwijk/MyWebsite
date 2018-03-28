<?php 

// Register Navigation Menus
function custom_navigation_menus() {

	$locations = array(
		'Primary' => __( 'primary menu', 'text_domain' ),
		'Secondary' => __( 'Secondary menu', 'text_domain' )
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'custom_navigation_menus' );