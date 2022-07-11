<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
//////////////////////////////////////////////

/*
if (!extension_loaded('imagick')){
    echo 'imagick not installed';
}
else{
    echo 'imagick is installed';
}
*/

// phpinfo();
///////////////////////////////////////////////
function mon_31w_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5',array('search-form') );
	add_theme_support('custom-background');

} 
add_action( 'after_setup_theme', 'mon_31w_setup' );


    function mon_31w_enqueue() {
        wp_enqueue_style( 	'mon_31w-style', 
                            get_stylesheet_uri(),
                            array(),
                            filemtime(get_template_directory() . '/style.css'));

        wp_enqueue_style(   '31w-google-font', 
                            'https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto&display=swap',
                             false);

    }
    add_action( 'wp_enqueue_scripts', 'mon_31w_enqueue' );

// Pour enlever une erreur que je ne comprend pas.
// Mettre la section en commentaire pour voir l'erreur
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );

function mon_31w_scripts() {
	wp_enqueue_style( 'mon_31w-style', get_stylesheet_uri(), array(), _S_VERSION );
	
}
add_action( 'wp_enqueue_scripts', 'mon_31w_scripts' );