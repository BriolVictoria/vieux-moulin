<?php
/* Template Name: Actualités */
get_header();

$image_actualite = get_field('image_actualite');
$titre_section_actualite = get_field('titre_section_actualite');

$titre_actualite_intro = get_field('titre_actualite_intro');
$description_actualite_intro = get_field('description_actualite_intro');
$image_actualite_intro = get_field('image_actualite_intro');
$one_line_image_actualite = get_field('one_line_image_actualite');

?>

<section class="actualite">
    <img class="image_actualite" src="<?= $image_actualite['url'] ?>" alt="<?= $image_actualite['alt'] ?>">
    <h2 class="titre_page_actualite">
        <span class="soulignement_titre_actualite"><?= $titre_section_actualite ?></span>
    </h2>
</section>

<section class=intro_actualite>
    <img class="one_line_image_actualite" src="<?= $one_line_image_actualite['url'] ?>" alt="<?= $one_line_image_actualite['alt'] ?>">
    <div class="intro_container">
        <h2 class="intro_titre_actualite"><?= $titre_actualite_intro ?></h2>
        <p class="intro_description_actualite"><?= $description_actualite_intro ?></p>
    </div>
    <img class="intro_image_actualite" src="<?= $image_actualite_intro['url'] ?>" alt="<?= $image_actualite_intro['alt'] ?>">
</section>

<?php get_footer(); ?>
