<?php
/* Template Name: Accueil */
get_header();

$titre_section_decouvrir = get_field('titre_section_decouvrir');
$description_decouvrir = get_field('description_decouvrir');
$image_decouvrir = get_field('image_decouvrir');
$bouton_decouvrir = get_field('bouton_decouvrir');

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


<?php get_footer(); ?>