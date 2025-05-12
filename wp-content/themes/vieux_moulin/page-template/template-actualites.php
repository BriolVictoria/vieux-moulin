<?php
/* Template Name: Actualités */
get_header();

$image_actualite = get_field('image_actualite');
$titre_section_actualite = get_field('titre_section_actualite');

$titre_actualite_intro = get_field('titre_actualite_intro');
$description_actualite_intro = get_field('description_actualite_intro');
$image_actualite_intro = get_field('image_actualite_intro');

?>



<?php get_footer(); ?>
