<?php

/*  
	====================================
	| Activate Menus
	====================================
*/
	
	function pwvms_theme_menus() {
		add_theme_support ('menus');
		register_nav_menus(
			array(
			'primary-menu' => __('Main Menu'),
			'secondary-menu' => __('Footer Menu')
			)
		);
	}
	add_action('init', 'pwvms_theme_menus');

/*  
	====================================
	| Include Scripts and Styles
	====================================
*/
	
	function pwvms_theme_style() {
		wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', '', '3.0', 'all');
		wp_enqueue_style('fontawesome_css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', '', '4.7.0', 'all');
		wp_enqueue_style('slick.css', get_template_directory_uri() . '/assets/slick/slick.css', '', '1.0.0', 'all');
		wp_enqueue_style('slick-theme_css', get_template_directory_uri() . '/assets/slick/slick-theme.css', '', '1.0.0', 'all');
		wp_enqueue_style('pwvmsstyle_css', get_template_directory_uri() . '/assets/css/pwvmsstyle.css', '', '1.0.0', 'all');
	}
	add_action('wp_enqueue_scripts', 'pwvms_theme_style');
	
	function pwvms_theme_js () {
		wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true);
		wp_enqueue_script('btn_serv_js', get_template_directory_uri() . '/assets/js/btn-serv.js', array('jquery', 'bootstrap_js'), '', true);
		wp_enqueue_script('twitter_widgets_js', get_template_directory_uri() . '/assets/js/widgets.js', array('jquery', 'bootstrap_js', 'btn_serv_js'), '', true);
		wp_enqueue_script('slick_min_js', get_template_directory_uri() . '/assets/slick/slick.min.js', array('jquery'), '', true);
		wp_enqueue_script('slick_slider_js', get_template_directory_uri() . '/assets/js/slick-slider.js', array('jquery'), '', true);
	}
	add_action('wp_enqueue_scripts', 'pwvms_theme_js');
	
	//Register Custom Navigation Walker
	require_once('wp-bootstrap-navwalker.php');

/*  
	====================================
	| Theme Support Function
	====================================
*/
		
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats', array('aside', 'image', 'video'));

	
	/*  
	====================================
	| Sidebar Function for Widgets
	====================================
*/
	function pwvms_widget_setup() {
		register_sidebar(
			array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'description' => 'Tweet Widget Area'
			)
		);
	}
	
	add_action('widgets_init', 'pwvms_widget_setup');



?>