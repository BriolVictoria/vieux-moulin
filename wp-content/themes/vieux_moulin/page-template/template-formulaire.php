<?php
/* Template Name: Formulaire */
get_header();

$titre_formulaire = get_field('titre_formulaire');
$bouton_formulaire = get_field('bouton_formulaire');

?>

<section>
    <h2><?= $titre_formulaire ?></h2>
    <a href="<?= $bouton_formulaire['url'] ?>"><?= $bouton_formulaire['title'] ?></a>
</section>

<?php get_footer(); ?>
