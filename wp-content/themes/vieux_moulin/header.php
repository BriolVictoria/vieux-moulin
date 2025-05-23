<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= wp_title('·', false, 'right') . get_bloginfo('name') ?></title>
    <link rel="stylesheet"
          href="<?php echo get_template_directory_uri(); ?>/css/all-template-css.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>

    <script src="<?php echo get_template_directory_uri(); ?>/js/bgm.js"></script>


</head>

<body>

<header>
    <section class="top_header bgm_seen">
        <img class="logo_header" src="<?= get_site_icon_url('106') ?>" alt="Icône du site, initial de Vieux Moulin">

        <div class="titre-et-burger">
            <h1>
                <a class="titre_header" href="<?php echo esc_url(home_url('/')); ?>">Le vieux moulin</a>
            </h1>
            <a href="#" id="openBtn">
            <span class="burger-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
            </a>
        </div>

        <a class="logo_facebook hidden_for_bgm"
           href="https://www.facebook.com/people/Vieux-Moulin-Strainchamps/...">
            <img class="logo_facebook" src="..." alt="Facebook">
        </a>
    </section>

    <section class="top_header hidden_for_bgm">
        <img class="logo_header " src="<?= get_site_icon_url('106') ?>" alt="Icône du site, initial de Vieux Moulin">
        <h1>
            <a class="titre_header" href="<?php echo esc_url(home_url('/')); ?>">Le vieux moulin</a>
        </h1>
        <a class="logo_facebook hidden_for_bgm"
           href="https://www.facebook.com/people/Vieux-Moulin-Strainchamps/pfbid02bHjUPaiNnGz9aNMzjdTKdNVNAFZFMSpA6jM7U7szSNdDSpcrUkawR43UuDs23fqsl/"><img
                    class="logo_facebook"
                    src="https://vieux-moulin.test/wp-content/uploads/2025/05/Screenshot-2025-05-03-at-3.25.03 PM.png"
                    alt="Icône du site, initial de Vieux Moulin"></a>
    </section>
    <section class="bottom_header">
        <ul class="navigation_header hidden_for_bgm">
            <?php foreach (dw_get_navigation_links('header-menu') as $link): ?>
                <li class="lien">
                    <a href="<?= $link->href ?>" class="lien_navigation_header"><?= $link->label; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</header>

<main>

