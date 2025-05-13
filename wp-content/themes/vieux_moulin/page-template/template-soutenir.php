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

<section>
    <img src="<?= $qr_code_qrcode['url'] ?>" alt="<?= $qr_code_qrcode['title'] ?>">
    <h2><?= $titre_qrcode ?></h2>
    <p><?= $description_qrcode ?></p>
</section>

<section>
    <h2><?= $titre_type_dons ?></h2>
    <p><?= $description_type_dons ?></p>
    <img src="<?= $image_type_dons['url'] ?>" alt="<?= $image_type_dons['title'] ?>">
    <a href="<?= $bouton_type_dons['url'] ?>"><?= $bouton_type_dons['title'] ?></a>
</section>

<section>
    <h2><?= $grand_titre_benevolat ?></h2>
    <p><?= $petit_titre_benevolat ?></p>
    <p><?= $description_benevolat ?></p>
    <img src="<?= $image_benevolat['url'] ?>" alt="<?= $image_benevolat['title'] ?>">
</section>

<?php get_footer(); ?>
