<?php

// Support des images à la une + titre géré par WordPress
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

// Taille d'image personnalisée pour les cards (400x250, recadrée)
add_image_size('card-thumbnail', 400, 250, true);

// Chargement des styles et scripts
function laboucle_enqueue_assets()
{
    wp_enqueue_style(
        'laboucle-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    wp_enqueue_script(
        'laboucle-main',
        get_stylesheet_directory_uri() . '/js/main.js',
        array(),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'laboucle_enqueue_assets');

// Emplacements de menus
function laboucle_register_menus()
{
    register_nav_menus(array(
        'main'   => 'Menu principal',
        'footer' => 'Menu pied de page',
    ));
}
add_action('after_setup_theme', 'laboucle_register_menus');

// Custom Post Type « Auteur » + taxonomie « Domaine »
function laboucle_register_auteurs()
{
    // CPT Auteur
    $labels_auteur = array(
        'name'          => 'Auteurs',
        'singular_name' => 'Auteur',
        'all_items'     => 'Tous les auteurs',
        'add_new_item'  => 'Ajouter un auteur',
        'edit_item'     => 'Modifier l\'auteur',
        'menu_name'     => 'Auteurs',
    );

    $args_auteur = array(
        'labels'       => $labels_auteur,
        'public'       => true,
        'show_in_rest' => true,
        'has_archive'  => true,
        'rewrite'      => array('slug' => 'auteurs'),
        'supports'     => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'    => 'dashicons-admin-users',
    );

    register_post_type('auteur', $args_auteur);

    // Taxonomie Domaine
    $labels_domaine = array(
        'name'          => 'Domaines',
        'singular_name' => 'Domaine',
        'new_item_name' => 'Nom du nouveau domaine',
        'parent_item'   => 'Domaine parent',
    );

    $args_domaine = array(
        'labels'       => $labels_domaine,
        'public'       => true,
        'show_in_rest' => true,
        'hierarchical' => true,
    );

    register_taxonomy('domaine', 'auteur', $args_domaine);
}
add_action('init', 'laboucle_register_auteurs');
