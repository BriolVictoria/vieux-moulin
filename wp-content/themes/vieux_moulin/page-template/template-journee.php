<?php
/* Template Name: Journée type */
get_header();

$titre_introduction = get_field('titre_introduction');
$description_introduction = get_field('description_introduction');
$image_introduction = get_field('image_introduction');

$titre_faq = get_field('titre_faq');

$titre_section_foyer = get_field('titre_section_foyer');
$bouton_foyer = get_field('bouton_foyer');

?>

<section>
    <h2><?= $titre_introduction ?></h2>
    <p><?= $description_introduction ?></p>
    <img src="<?= $image_introduction['url'] ?>" alt="<?= $image_introduction['title'] ?>">
</section>

<section>
    <h2><?= $titre_faq ?></h2>
</section>

<section>
    <h2>$titre_section_foyer</h2>
    <a href="<?= $bouton_foyer['url'] ?>"><?= $bouton_foyer['title'] ?></a>
</section>

<?php get_footer(); ?>
