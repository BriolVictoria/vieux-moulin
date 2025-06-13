<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= wp_title('·', false, 'right') . get_bloginfo('name') ?></title>
    <link rel="stylesheet"
          href="<?php echo get_template_directory_uri(); ?>/css/all-template-css.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>

    <script defer src="<?= get_template_directory_uri(); ?>/js/bgm.js?v=<?= time(); ?>"></script>
    <link rel="icon" href="<?= get_site_icon_url('22') ?>">


</head>

<body>

<header class="main-header">
    <section class="top_header">
        <img class="logo_header" src="<?= get_site_icon_url('106') ?>" alt="Icône du site, initial de Vieux Moulin">
        <h1>
            <a class="titre_header" title="Vers la page d'Accueil" href="<?= esc_url(home_url('/')); ?>">Le vieux moulin</a>
        </h1>

        <a class="logo_facebook" title="Vers la page Facebook" target="_blank"
           href="https://www.facebook.com/people/Vieux-Moulin-Strainchamps/pfbid02bHjUPaiNnGz9aNMzjdTKdNVNAFZFMSpA6jM7U7szSNdDSpcrUkawR43UuDs23fqsl/">
            <img src="https://vieux-moulin.test/wp-content/uploads/2025/05/Screenshot-2025-05-03-at-3.25.03 PM.png"
                 alt="Facebook">
        </a>
    </section>

    <!-- Menu Burger -->
    <input type="checkbox" tabindex="0" id="bgm_navigation" class="navigation_burger_menu">
    <label for="bgm_navigation" class="nav_bgm_label">
        <svg class="nav_bgm_svg" width="45" height="45" viewBox="0 0 30 30" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path class="nav_element" d="M6.25 9.30469H23.75" stroke-width="2"/>
            <path class="nav_element" d="M6.25 15.554H23.75" stroke-width="2"/>
            <path class="nav_element" d="M6.25 21.8347H23.75" stroke-width="2"/>
        </svg>
    </label>

    <ul class="bottom_header">
        <?php foreach (dw_get_navigation_links('header-menu') as $link): ?>
            <li class="lien">
                <a href="<?= $link->href ?>" title="Vers la page <?= $link->label; ?>" class="lien_navigation_header"><?= $link->label; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</header>


<main>

