<?php
add_action('wp_enqueue_scripts', function(){
	
	$stylesheets = array(
		'bootstrap',
		'theme',
		'color-defaults',
		'swatch-white',
		'swatch-blue',
		'swatch-gray',
		'swatch-black',
		'swatch-white-black',
		'swatch-white-green',
		'swatch-white-red',
		'fonts',
		'revolution'
	);
	
	$scripts = array(
		'packages',
		'theme',
		'revolution'
	);
	
	wp_enqueue_style('google-fonts', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,300italic,400italic,600italic');
	
	foreach($stylesheets as $stylesheet){
		wp_register_style($stylesheet, get_stylesheet_directory_uri() . '/assets/css/' . $stylesheet . '.min.css');
		wp_enqueue_style($stylesheet);
	}
	
	wp_enqueue_script('jquery');

	foreach($scripts as $script){
		wp_register_script($script, get_stylesheet_directory_uri() . '/assets/js/' . $script . '.js');
		wp_enqueue_script($script, false, array(), null, true);
	}
	
});
