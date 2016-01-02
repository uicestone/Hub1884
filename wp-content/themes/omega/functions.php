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
	
	wp_enqueue_style('google-fonts', 'http://fonts.useso.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,300italic,400italic,600italic');
	
	foreach($stylesheets as $stylesheet){
		wp_register_style($stylesheet, get_stylesheet_directory_uri() . '/assets/css/' . $stylesheet . '.css');
		wp_enqueue_style($stylesheet);
	}
	
	wp_enqueue_script('jquery');

	foreach($scripts as $script){
		wp_register_script($script, get_stylesheet_directory_uri() . '/assets/js/' . $script . '.js');
		wp_enqueue_script($script, false, array(), null, true);
	}
	
});

class Hub1884_Walker_Nav_Menu extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = array()) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"dropdown-menu\">\n";
	}
}

add_action('after_setup_theme', function(){
	register_nav_menu('primary', '主导航');
});

add_theme_support('post-thumbnails');

add_shortcode('site_url', function(){
	return site_url();
});

add_filter('show_admin_bar', '__return_false');