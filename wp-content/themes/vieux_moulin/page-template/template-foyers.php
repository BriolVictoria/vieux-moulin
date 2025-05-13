<?php
/* Template Name: Nos foyers */
get_header();

$titre_foyer = get_field('titre_foyer');
$description_foyer = get_field('description_foyer');
$image_foyer = get_field('image_foyer');

$titre_maison = get_field('titre_maison');
$image_maison = get_field('image_maison');
$bouton_maison = get_field('bouton_maison');

$image_encadrement = get_field('image_encadrement');
$titre_encadrement = get_field('titre_encadrement');
$description_encadrement = get_field('description_encadrement');

?>

<section>
    <h2><?= $titre_foyer ?></h2>
    <p><?= $description_foyer ?></p>
    <img src="<?= $image_foyer['url'] ?>" alt="<?= $image_foyer['title'] ?>">
</section>

<section>
    <h2><?= $titre_maison ?></h2>
    <img src="<?= $image_maison['url'] ?>" alt="<?= $image_maison['title'] ?>">
    <a href="<?= $bouton_maison['url'] ?>"><?= $bouton_maison['title'] ?></a>
</section>

<section>
    <h2><?= $titre_encadrement ?></h2>
    <p><?=$description_encadrement?></p>
    <img src="<?= $image_encadrement['url'] ?>" alt="<?= $image_encadrement['alt'] ?>">
</section>

<?php get_footer(); ?>
