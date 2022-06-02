<?php 
function iatec_enqueue_scripts() {
  wp_enqueue_style( 'bootstrap-styles', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css' );
  wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/assets/styles.css', array('bootstrap-styles'), '1.0.0' );
  wp_enqueue_script( 'bootstrap-scripts', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js');
}
add_action( 'wp_enqueue_scripts', 'iatec_enqueue_scripts' );

function iatec_load_theme_textdomain() {
	load_theme_textdomain( 'iatec', get_template_directory() . '/lang' );
}
add_action( 'after_setup_theme', 'iatec_load_theme_textdomain' );