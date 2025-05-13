<?php
/* Template Name: Nous découvrir */
get_header();

$image_vieuxmoulin = get_field('image_vieuxmoulin');
$titre_section_vieuxmoulin = get_field('titre_section_vieuxmoulin');

$titre_infromation = get_field('titre_infromation');
$description_infromation = get_field('description_infromation');

$titre_video = get_field('titre_video');

$titre_section_foyer = get_field('titre_section_foyer');
$bouton_foyer = get_field('bouton_foyer');

$titre_information = get_field('titre_information');
$description_information = get_field('description_information');

$titre_soutient = get_field('titre_soutient');
$image_soutient = get_field('image_soutient');

?>

<section>
    <img src="<?= $image_vieuxmoulin['url'] ?>" alt="<?= $image_vieuxmoulin['alt'] ?>">
    <h2><?= $titre_section_vieuxmoulin ?></h2>
</section>

<section>
    <h2><?= $titre_infromation ?></h2>
    <p><?= $description_infromation ?></p>
</section>

<section>
    <h2><?= $titre_video ?></h2>
</section>

<section>
    <h2><?= $titre_section_foyer?></h2>
    <a href="<?= $bouton_foyer['url'] ?>"><?= $bouton_foyer['title'] ?></a>
</section>

<section>
    <h2><?= $titre_information ?></h2>
    <p><?= $description_information ?></p>
</section>

<section>
    <h2><?= $titre_soutient ?></h2>
    <img src="<?= $image_soutient['url'] ?>" alt="<?= $image_soutient['alt'] ?>">
    <img src="<?= $image_soutient['url'] ?>" alt="<?= $image_soutient['alt'] ?>">
</section>


<?php get_footer(); ?>
