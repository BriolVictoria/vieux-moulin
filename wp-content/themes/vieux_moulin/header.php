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

    <ul class="navigation_header" id="nav_menu">
        <?php foreach (dw_get_navigation_links('header-menu') as $link): ?>
            <li class="lien">
                <a href="<?= $link->href ?>" title="Vers la page <?= $link->label; ?>" class="lien_navigation_header"><?= $link->label; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

    <button class="nav_bgm" aria-expanded="false" aria-label="Menu principal" aria-controls="nav_menu">
        <svg class="nav_bgm_svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
            <path class="nav_element top" d="M6 9H24" stroke-width="2" stroke="#000"/>
            <path class="nav_element middle" d="M6 15H24" stroke-width="2" stroke="#000"/>
            <path class="nav_element bottom" d="M6 21H24" stroke-width="2" stroke="#000"/>
        </svg>
    </button>
</header>


<main>

