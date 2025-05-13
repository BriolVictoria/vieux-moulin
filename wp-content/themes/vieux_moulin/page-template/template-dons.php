<?php
/* Template Name: Dons */
get_header();

$qr_code_commentfaire = get_field('qr_code_commentfaire');
$titre_commentfaire = get_field('titre_commentfaire');
$description_commentfaire = get_field('description_commentfaire');

$titre_commentfaire = get_field('titre_formulaire');
$bouton_formualire = get_field('bouton_formualire');

?>

<section>
    <img src="<?= $qr_code_commentfaire['url'] ?>" alt="<?= $qr_code_commentfaire['alt'] ?>">
    <h2><?= $titre_commentfaire ?></h2>
    <p><?= $description_commentfaire ?></p>
</section>

<section>
    <h2><?= $titre_commentfaire ?></h2>
    <a href="<?= $bouton_formualire['url'] ?>"><?= $bouton_formualire['title'] ?></a>
</section>

<?php get_footer(); ?>
