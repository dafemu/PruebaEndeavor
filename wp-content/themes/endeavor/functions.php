<?php 

	//importacion navwalker para menu
	require_once('wp-bootstrap-navwalker.php');


	//soporte para teste tema
	function wpb_theme_setup(){
		add_theme_support('post-thumbnails');//que pueda salir las imagnes destacadas.

	//Menus de navegacion
	register_nav_menus(array('primary' => ('Primary Menu')));

	//Soporte para Formatos de post
	add_theme_support('post-formats', array('aside','gallery'));
	}

	add_action('after_setup_theme', 'wpb_theme_setup');

	//Controlar cantidad de caracteres en el exceprt
	function set_excerpt_length(){
		return 25;
	}
	add_filter('excerpt_length', 'set_excerpt_length');

?>