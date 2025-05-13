<?php
/* Template Name: Actualités */
get_header();

$image_actualite = get_field('image_actualite');
$titre_section_actualite = get_field('titre_section_actualite');

$titre_actualite_intro = get_field('titre_actualite_intro');
$description_actualite_intro = get_field('description_actualite_intro');
$image_actualite_intro = get_field('image_actualite_intro');

?>

<section>
    <img src="<?= $image_actualite['url'] ?>" alt="<?= $image_actualite['alt'] ?>">
    <h2><?= $titre_section_actualite ?></h2>
</section>

<section>
    <h2><?= $titre_actualite_intro ?></h2>
    <p><?= $description_actualite_intro ?></p>
    <img src="<?= $image_actualite_intro['url'] ?>" alt="<?= $image_actualite_intro['alt'] ?>">
</section>

<?php get_footer(); ?>
