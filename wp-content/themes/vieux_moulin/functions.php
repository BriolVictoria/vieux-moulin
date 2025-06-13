<?php

// Désactivation de Gutenberg (éditeur de blocs) sur le back-end et widgets
add_filter('use_block_editor_for_post', '__return_false');
add_filter('use_block_editor_for_post_type', function ($is_enabled, $post_type) {
    return false;
}, 10, 2);
add_filter('use_widgets_block_editor', '__return_false');

// Suppression des styles Gutenberg front-end
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
}, 20);

// Enregistrement des post types

add_theme_support('post-thumbnails', ['actualite', 'foyer', 'partenaire']);

register_post_type('actualite', [
    'label' => 'Actualités',
    'description' => 'Listes représentant mes actualités',
    'menu_position' => 2,
    'menu_icon' => 'dashicons-email-alt',
    'public' => true,
    'rewrite' => ['slug' => 'actualite'],
    'supports' => ['title', 'thumbnail', 'editor', 'excerpt'],
]);

register_post_type('foyer', [
    'label' => 'Foyers',
    'description' => 'Listes représentant mes foyers',
    'menu_position' => 3,
    'menu_icon' => 'dashicons-admin-home',
    'public' => true,
    'rewrite' => ['slug' => 'foyer'],
    'supports' => ['title', 'thumbnail', 'editor'],
]);

register_post_type('partenaire', [
    'label' => 'Partenaires',
    'description' => 'Listes représentant mes partenaires',
    'menu_position' => 4,
    'menu_icon' => 'dashicons-businessman',
    'public' => true,
    'rewrite' => ['slug' => 'partenaire'],
    'supports' => ['title', 'thumbnail'],
]);

register_post_type('contact_message', [
    'label' => 'Messages de contact',
    'description' => 'Les envois de formulaire via la page de contact',
    'menu_position' => 5,
    'menu_icon' => 'dashicons-email',
    'public' => true,
    'has_archive' => false,
    'supports' => ['title', 'editor'],
]);

// Fonction pour créer une taxonomy personnalisée "projet_category"
function create_projet_terms() {
    register_taxonomy('projet_category', ['projet'], [
        'label' => 'Catégories de projets',
        'hierarchical' => true,
        'public' => true,
        'rewrite' => ['slug' => 'projet-category'],
        'show_ui' => true,
        'show_admin_column' => true,
    ]);
}
add_action('init', 'create_projet_terms');

// Fonction de gestion des menus de navigation
function register_my_menus() {
    register_nav_menus([
        'header-menu' => 'Menu principal',
        'footer-menu' => 'Menu pied de page',
    ]);
}
add_action('init', 'register_my_menus');

function dw_get_navigation_links(string $location): array
{
    $locations = get_nav_menu_locations();

    if (!isset($locations[$location])) {
        return [];
    }

    $nav_id = $locations[$location];
    $nav = wp_get_nav_menu_items($nav_id);

    $links = [];

    foreach ($nav as $post) {
        $link = new stdClass();
        $link->href = $post->url;
        $link->label = $post->title;
        $link->icone = get_field('icon', $post);

        $links[] = $link;
    }

    return $links;
}

// Inclusion de la classe ContactForm
use DW_Theme\Forms\ContactForm;

require __DIR__ . '/./form/ContactForm.php';

// Gestion du formulaire de contact
add_action('admin_post_nopriv_dw_submit_contact_form', 'dw_handle_contact_form');
add_action('admin_post_dw_submit_contact_form', 'dw_handle_contact_form');

function dw_handle_contact_form()
{
    $form = (new ContactForm())
        ->rule('firstname', 'required')
        ->rule('lastname', 'required')
        ->rule('email', 'required')
        ->rule('email', 'email')
        ->rule('message', 'required')
        ->rule('message', 'no_test')
        ->sanitize('firstname', 'sanitize_text_field')
        ->sanitize('lastname', 'sanitize_text_field')
        ->sanitize('email', 'sanitize_text_field')
        ->sanitize('message', 'sanitize_textarea_field');

    return $form->handle($_POST);
}
