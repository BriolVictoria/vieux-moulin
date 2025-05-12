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



<?php get_footer(); ?>
