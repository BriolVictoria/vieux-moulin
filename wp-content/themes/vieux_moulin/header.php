<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= wp_title('·', false, 'right') . get_bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/css/all-template-css.css?v=<?= time(); ?> " > <!--demander si on peut faire ça ou aps -->


</head>

<body>

<header>
    <section class="top_header">
        <img class="logo_header" src="<?= get_site_icon_url('106') ?>" alt="Icône du site, initial de Vieux Moulin">
        <h1>
            <a class="titre_header" href="<?php echo esc_url(home_url('/')); ?>">Le vieux moulin</a>
        </h1>
        <a class="logo_facebook" href="https://www.facebook.com/people/Vieux-Moulin-Strainchamps/pfbid02bHjUPaiNnGz9aNMzjdTKdNVNAFZFMSpA6jM7U7szSNdDSpcrUkawR43UuDs23fqsl/"><img class="logo_facebook" src="https://vieux-moulin.test/wp-content/uploads/2025/05/Screenshot-2025-05-03-at-3.25.03 PM.png" alt="Icône du site, initial de Vieux Moulin"></a>

    </section>
    <section class="bottom_header">
        <ul class="navigation_header">
            <?php foreach (dw_get_navigation_links('header-menu') as $link): ?>
                <li class="lien">
                    <a href="<?= $link->href ?>" class="lien_navigation_header"><?= $link->label;?></a>
                </li>
            <?php endforeach;  ?>
        </ul>
    </section>
</header>

<main>

