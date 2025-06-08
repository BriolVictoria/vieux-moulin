<?php

// Gutenberg est le nouvelle éditeur de contenu propre à wordPress
// il ne nous intérresse pas pour l'utilisation du thème que
// nous allons créer. On va le désactiver :

// Disable Gutenberg on the back end.
add_filter('use_block_editor_for_post', '__return_false'); // une chaîne de caractère qui existe dans wordPress

add_filter('use_block_editor_for_post_type', function ($is_enabled, $post_type) {
    return false; // désactive Gutenberg pour tous les types de contenus
}, 10, 2);

// Disable Gutenberg for widgets.
add_filter('use_widgets_block_editor', '__return_false');
// Disable default front-end styles.

add_action('wp_enqueue_scripts', function () {
    // Remove CSS on the front end.
    wp_dequeue_style('wp-block-library');
    // Remove Gutenberg theme.
    wp_dequeue_style('wp-block-library-theme');
    // Remove inline global CSS on the front end.
    wp_dequeue_style('global-styles');
}, 20);

//debut postType
// Activer l'utilisation des vignettes (images de couverture) sur nos post_type
add_theme_support('post-thumbnails', ['actualite']);

// Enregistrer de nouveau type de contenu qui seront stockés dans la table "wp_posts",
// avec un identifint spécifique dans la colonne "post_type"

register_post_type('actualite', [
    'label' => 'Actualites',
    'description' => 'Listes représentant mes actualités',
    'menu_position' => 2,
    'menu_icon' => 'dashicons-email-alt',
    'public' => true,
    'rewrite' => [
        'slug' => 'actualite'
    ],
    'supports' => ['title', 'thumbnail', 'editor', 'excerpt'],
]);


// Activer l'utilisation des vignettes (images de couverture) sur nos post_type
add_theme_support('post-thumbnails', ['foyer']);


// Enregistrer de nouveau type de contenu qui seront stockés dans la table "wp_posts",
// avec un identifint spécifique dans la colonne "post_type"

register_post_type('foyer', [
    'label' => 'Foyers',
    'description' => 'Listes représentant mes foyers',
    'menu_position' => 2,
    'menu_icon' => 'dashicons-admin-home',
    'public' => true,
    'rewrite' => [
        'slug' => 'foyer'
    ],
    'supports' => ['title', 'thumbnail', 'editor'],
]);


// Activer l'utilisation des vignettes (images de couverture) sur nos post_type
add_theme_support('post-thumbnails', ['partenaire']);


// Enregistrer de nouveau type de contenu qui seront stockés dans la table "wp_posts",
// avec un identifint spécifique dans la colonne "post_type"

register_post_type('partenaire', [
    'label' => 'Partenaires',
    'description' => 'Listes représentant mes partenaires',
    'menu_position' => 2,
    'menu_icon' => 'dashicons-businessman',
    'public' => true,
    'rewrite' => [
        'slug' => 'partenaire'
    ],
    'supports' => ['title', 'thumbnail'],
]);


//fin postType


//fonction dd


/*function dd($value)
{
    var_dump($value);
    die();
}*/

//fin fonction dd



//fonction  pour la navigation
function register_my_menus() {
    register_nav_menus([
        'header-menu' => 'Menu principal',
        'footer-menu' => 'Menu pied de page',
    ]);
}
add_action('init', 'register_my_menus');

function dw_get_navigation_links(string $location): array
{
    //Récupérer l'objet WP pour le menu à la location $location
    $locations = get_nav_menu_locations();

    if (!isset($locations[$location])) {
        return [];
    }

    $nav_id = $locations[$location];
    $nav = wp_get_nav_menu_items($nav_id);


    // Transformer le menu en un tableau de liens, chaque lien étant un objet personnalisé

    $links = [];

    foreach ($nav as $post) {
        $link = new stdClass();
        $link->href = $post->url;
        $link->label = $post->title;
        $link->icone = get_field('icon', $post);


        /*$links[] = $link; même chose mais en plus court*/
        array_push($links, $link);
    }


    //Retourner ce tableau d'objets (liens).

    return $links;

}

//fin fonction  pour la navigation
//Import de la MAP

function enqueue_leaflet_map_script() {
    // Ton champ ACF (OpenStreetMap)
    $location = get_field('ma_carte');

    // Si les données sont présentes, on les passe au JS
    if( $location ) {
        wp_enqueue_script('carte-js', get_template_directory_uri() . '/assets/js/map.js', [], false, true);

        wp_localize_script('carte-js', 'acfMapData', [
            'lat' => $location['lat'],
            'lng' => $location['lng'],
            'zoom' => $location['zoom'],
            'address' => $location['address']
        ]);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_leaflet_map_script');

