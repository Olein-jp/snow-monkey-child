<?php
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style(
		get_stylesheet(),
		get_stylesheet_uri(),
		[ get_template() ]
	);
} );
