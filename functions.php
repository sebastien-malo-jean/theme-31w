<?php
// Enfiler la feuille de style
function ajouter_styles() {
    wp_enqueue_style(
        'mon-style',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')
    );
}

    add_action( 'wp_enqueue_scripts', 'ajouter_styles' );

function ajout_options() {
    add_theme_support('menus');
}

add_action("after_setup_theme","ajout_options");