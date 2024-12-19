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

function theme_31w_customize_register($wp_customize) {
    // Ajout de la section Hero
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'theme-31w'),
        'priority' => 30,
    ));

    // Réglage pour le titre
    $wp_customize->add_setting('hero_title', array(
        'default' => __('Bienvenue sur mon site', 'theme-31w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title', 'theme-31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Réglage pour le sous-titre
    $wp_customize->add_setting('hero_subtitle', array(
        'default' => __('Your success starts here.', 'theme-31w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_subtitle', array(
        'label' => __('Hero Subtitle', 'theme-31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Réglage pour l'image de fond
    $wp_customize->add_setting('hero_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
        'label' => __('Hero Background Image', 'theme-31w'),
        'section' => 'hero_section',
    )));

    // Réglage pour le texte du bouton CTA
    $wp_customize->add_setting('hero_cta_text', array(
        'default' => __('Learn More', 'theme-31w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_cta_text', array(
        'label' => __('CTA Button Text', 'theme-31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Réglage pour le lien du bouton CTA
    $wp_customize->add_setting('hero_cta_link', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('hero_cta_link', array(
        'label' => __('CTA Button Link', 'theme-31w'),
        'section' => 'hero_section',
        'type' => 'url',
    ));

    // Réglage pour le placeholder de l'email
    $wp_customize->add_setting('hero_newsletter_email', array(
        'default' => 'Entrez votre email', // Valeur par défaut
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_newsletter_email', array(
        'label' => __('Newsletter Placeholder', 'theme-31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Réglage pour le texte du bouton de la newsletter
    $wp_customize->add_setting('hero_newsletter_button_text', array(
        'default' => __('Subscribe', 'theme-31w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_newsletter_button_text', array(
        'label' => __('Newsletter Button Text', 'theme-31w'),
        'section' => 'hero_section',
        'type' => 'text',
        'description' => __('Texte du bouton d\'inscription à la newsletter.', 'theme-31w'),
    ));
}
add_action('customize_register', 'theme_31w_customize_register');

function ajout_options() {
    // Activer le support des menus personnalisés
    add_theme_support('menus');
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action("after_setup_theme", "ajout_options");

/**
 * Modifie la requete principale de WordPress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas ci nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function modifie_requete_principal( $query ) {
if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
  $query->set( 'category_name', 'favorites' );
  $query->set( 'orderby', 'title' );
  $query->set( 'order', 'ASC' );
  }
 }
 add_action( 'pre_get_posts', 'modifie_requete_principal' );

 