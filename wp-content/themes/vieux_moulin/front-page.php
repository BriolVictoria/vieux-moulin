<?php
/* Template Name: Accueil */
get_header();

$titre_section_decouvrir = get_field('titre_section_decouvrir');
$description_decouvrir = get_field('description_decouvrir');
$image_decouvrir = get_field('image_decouvrir');
$bouton_decouvrir = get_field('bouton_decouvrir');

$titre_actualite = get_field('titre_actualite');
$bouton_actualite = get_field('bouton_actualite');

$titre_section_foyer = get_field('titre_section_foyer');
$bouton_foyer = get_field('bouton_foyer');

$titre_section_benevolat = get_field('titre_section_benevolat');
$description_benevolat = get_field('description_benevolat');
$image_benevolat = get_field('image_benevolat');

$titre_section_partenaires = get_field('titre_section_partenaires');
$bouton_partenaire = get_field('bouton_partenaire');

$titre_section_famille = get_field('titre_section_famille');
$description_famille = get_field('description_famille');
$bouton_famille = get_field('bouton_famille');
$image_famille = get_field('image_famille');

$titre_section_projets = get_field('titre_section_projets');
$description_projets = get_field('description_projets');
$image_projets = get_field('image_projets');
$bouton_projets = get_field('bouton_projets');
?>

<section class="decouvrir">
    <img class="image_decouvrir" src="<?= $image_decouvrir['url'] ?>" alt="<?= $image_decouvrir['alt'] ?>">
    <div class="decouvrir_container">
        <h2 class="titre_decouvrir"><?= $titre_section_decouvrir ?></h2>
        <p class="description_decouvrir"><?= $description_decouvrir ?></p>
        <a class="bouton_decouvrir" href="<?= $bouton_decouvrir['url'] ?>"><?= $bouton_decouvrir['title'] ?></a>

    </div>
</section>

<section class="actualite">
    <h2 class="titre_actualite"><?= $titre_actualite ?></h2>
    <a class="bouton_actualite" href="<?= $bouton_actualite['url'] ?>"><?= $bouton_actualite['title'] ?></a>
</section>

<section class="foyer">
    <h2 class="titre_foyer"><?= $titre_section_foyer ?></h2>
    <a class="bouton_foyer" href="<?= $bouton_foyer['url'] ?>"><?= $bouton_foyer['title'] ?></a>
</section>

<section class="benevolat">
    <div class="benevolat_container">
        <h2 class="titre_benevolat"><?= $titre_section_benevolat ?></h2>
        <p class="description_benevolat"><?= $description_benevolat ?></p>
    </div>
    <img class="image_benevolat" src="<?= $image_benevolat['url'] ?>" alt="<?= $image_benevolat['alt'] ?>">
</section>

<section class="partenaires">
    <h2 class="titre_partenaires"><?= $titre_section_partenaires ?></h2>
    <a class="bouton_partenaires" href="<?= $bouton_partenaire['url'] ?>"><?= $bouton_partenaire['title'] ?></a>
</section>

<section class="famille">
    <h2 class="titre_famille"><?= $titre_section_famille ?></h2>
    <img class="image_famille" src="<?= $image_famille['url'] ?>" alt="<?= $image_famille['alt'] ?>">
    <div class="famille_container">
        <p class="description_famille"><?= $description_famille ?></p>
        <a class="bouton_famille" href="<?= $bouton_famille['url'] ?>"><?= $bouton_famille['title'] ?></a>
    </div>
</section>

<section class="projet">
    <div class="projet_container">
        <h2 class="titre_projet"><?= $titre_section_projets ?></h2>
        <p class="description_projet"><?= $description_projets ?></p>
        <a class="bouton_projet" href="<?= $bouton_projets['url'] ?>"><?= $bouton_projets['title'] ?></a>
    </div>
    <img class="image_projet" src="<?= $image_projets['url'] ?>" alt="<?= $image_projets['alt'] ?>">

</section>

<?php get_footer(); ?>


