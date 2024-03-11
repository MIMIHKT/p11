<?php

function theme_enqueue_styles(){
    // Chargement du style.css du th�me enfant
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/style.css');

}

// Action qui permet de charger des scripts dans notre th�me
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


function enregistrement_nav_menus() {

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primaire', 'motatheme' ),
			'menu-2' => esc_html__( 'Secondaire', 'motatheme' ),
		)
	);
}
add_action( 'after_setup_theme', 'enregistrement_nav_menus' );

/* Chargement des script JS */
function script_javascript_pourletheme() {

    // Gestion de la Modale
    wp_enqueue_script('Modale', get_stylesheet_directory_uri() . '/js/modale.js', array('jquery'), '1.0.0', true);

}
add_action( 'wp_enqueue_scripts', 'script_javascript_pourletheme' );

