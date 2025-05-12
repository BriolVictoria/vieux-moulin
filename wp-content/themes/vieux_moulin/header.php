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
        <img class="logo" src="<?= get_site_icon_url('106') ?>" alt="Icône du site, initial de Vieux Moulin">
        <h1>
            <a class="titre" href="<?php echo esc_url(home_url('/')); ?>">Le vieux moulin</a>
        </h1>
    </section>

    <section class="bottom_header">
        <ul >
            <?php foreach (dw_get_navigation_links('header-menu') as $link): ?>
                <li class="lien">
                    <a href="<?= $link->href ?>" class="lien"><?= $link->label;?></a>
                </li>
            <?php endforeach;  ?>
        </ul>
    </section>
</header>

<main>

