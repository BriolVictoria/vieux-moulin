<?php
/* Template Name: Accueil */
get_header();
$title = get_field('titre_section_decouvrir');
$desc = get_field('description_decouvrir');
$img = get_field('image_decouvrir');
$link = get_field('lien_decouvrir');
?>


    <section>
        <h2><?= $title ?></h2>
        <p><?= $desc ?></p>
        <img src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>">
        <a href="<?=$link['url']  ?>"><?= $link['title'] ?></a>
    </section>

    <?php get_footer(); ?>