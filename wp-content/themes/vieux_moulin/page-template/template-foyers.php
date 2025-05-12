<?php
/* Template Name: Nous soutenir */
get_header();

$titre_foyer = get_field('titre_foyer');
$description_foyer = get_field('description_foyer');
$image_foyer = get_field('image_foyer');

$titre_maison = get_field('titre_maison');
$image_maison = get_field('image_maison');
$bouton_maison = get_field('bouton_maison');

$image_encadrement = get_field('image_encadrement');
$titre_encadrement = get_field('titre_encadrement');
$titre_section_foyer = get_field('titre_section_foyer');
$description_encadrement = get_field('description_encadrement');

?>



<?php get_footer(); ?>
