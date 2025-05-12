<?php
/* Template Name: Nous soutenir */
get_header();

$qr_code_qrcode = get_field('qr_code_qrcode');
$titre_qrcode = get_field('titre_qrcode');
$description_qrcode = get_field('description_qrcode');

$titre_type_dons = get_field('titre_type_dons');
$description_type_dons = get_field('description_type_dons');
$image_type_dons = get_field('image_type_dons');
$bouton_type_dons = get_field('bouton_type_dons');

$grand_titre_benevolat = get_field('grand_titre_benevolat');
$petit_titre_benevolat = get_field('petit_titre_benevolat');
$description_benevolat = get_field('description_benevolat');
$image_benevolat = get_field('image_benevolat');

?>



<?php get_footer(); ?>
