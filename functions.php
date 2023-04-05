<?php
	function kyle_theme_stylesheets(){
		wp_register_style( 'normalize', get_stylesheet_directory_uri().'/styles/normalize.css' );
		wp_register_style( 'main', get_stylesheet_directory_uri().'/styles/style.css' );
		wp_register_script( 'jqueryscript', get_stylesheet_directory_uri().'/scripts/jquery.js','','',true);
		wp_register_script( 'mainscript', get_stylesheet_directory_uri().'/scripts/main.js','','',true);
		
		wp_enqueue_style('normalize');
		wp_enqueue_style('main');
		wp_enqueue_script('jqueryscript');
		wp_enqueue_script('mainscript');
	}
	add_action('wp_enqueue_scripts', 'kyle_theme_stylesheets');
	add_theme_support('post-thumbnails');
?>