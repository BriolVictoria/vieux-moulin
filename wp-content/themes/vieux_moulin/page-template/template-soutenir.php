<?php
/* Template Name: Nous soutenir */
get_header();

$qr_code_qrcode = get_field('qr_code_qrcode');
$titre_qrcode = get_field('titre_qrcode');
$description_qrcode = get_field('description_qrcode');
$one_line_image_qrcode = get_field('one_line_image_qrcode');

$one_line_dons = get_field('one_line_dons');

$grand_titre_benevolat = get_field('grand_titre_benevolat');
$petit_titre_benevolat = get_field('petit_titre_benevolat');
$description_benevolat = get_field('description_benevolat');
$image_benevolat = get_field('image_benevolat');
$one_line_image_soutenir = get_field('one_line_image_soutenir');

?>

<section class="qrcode">
    <img class="one_line_image_qrcode" src="<?= $one_line_image_qrcode['url'] ?>"
         alt="<?= $one_line_image_qrcode['title'] ?>">
    <img class="qrcode_image" src="<?= $qr_code_qrcode['url'] ?>" alt="<?= $qr_code_qrcode['title'] ?>">
    <div class="qrcode_text">
        <h2 class="qrcode_titre"><?= $titre_qrcode ?></h2>
        <p class="qrcode_description"><?= $description_qrcode ?></p>
    </div>
</section>

<section class="different_dons">
    <img class="one_line_dons" src="<?= $one_line_dons['url'] ?>" alt="<?= $one_line_dons['title'] ?>">
    <?php
    if (have_rows('type_don')):
        while (have_rows('type_don')): the_row();
            $titre_par_dons = get_sub_field('titre_par_dons');
            $description_par_don = get_sub_field('description_par_don');
            $image_par_dons = get_sub_field('image_par_dons');
            $bouton_par_dons = get_sub_field('bouton_par_dons');

            ?>
            <section class="dons">


                <div class="contenu-gauche">
                    <h2 class="titre_par_dons"><?= $titre_par_dons ?></h2>
                    <p class="description_par_don"><?= $description_par_don ?></p>
                    <a class="bouton_par_dons" title="Vers le formulaire de dons" href="<?= $bouton_par_dons['url'] ?>"><?= $bouton_par_dons['title'] ?></a>
                </div>

                <div class="contenu-droite">
                    <img class="image_par_dons" src="<?= $image_par_dons['url'] ?>" alt="<?= $image_par_dons['title'] ?>">
                </div>
            </section>


        <?php
        endwhile;
    endif;
    ?>
</section>


<div class="exemple_container">


    <?php
    if (have_rows('exemple_type_dons')):
        while (have_rows('exemple_type_dons')): the_row();
            $image_exemple_type_dons = get_sub_field('image_exemple_type_dons');
            $titre_exemple_type_dons = get_sub_field('titre_exemple_type_dons');
            $description_exemple_type_dons = get_sub_field('description_exemple_type_dons');
            ?>

            <article class="exemple">
                <figure class="exemple_fig">
                    <img class="exemple_image" src="<?= $image_exemple_type_dons['url'] ?>"
                         alt="<?= $image_exemple_type_dons['title'] ?>">
                </figure>
                <header class="exemple_head">
                    <h3 class="exemple_titre"><?= $titre_exemple_type_dons ?></h3>
                </header>
                <p class="exemple_description"><?= $description_exemple_type_dons ?></p>
            </article>
        <?php
        endwhile;
    endif;
    ?>
</div>

<section class="benevolat_soutenir">
    <img class="one_line_image_soutenir" src="<?= $one_line_image_soutenir['url'] ?>"
         alt="<?= $one_line_image_soutenir['title'] ?>">
    <div class="back_image_benevolat_soutenir"></div>
    <img class="benevolat_soutenir_image" src="<?= $image_benevolat['url'] ?>" alt="<?= $image_benevolat['title'] ?>">
    <div class="text_container">
        <h2 class="benevolat_soutenir_titre1">
            <span class="titre_soulignement_benevolat_soutient"><?= $grand_titre_benevolat ?></span>
        </h2>
        <p class="benevolat_soutenir_titre2"><?= $petit_titre_benevolat ?></p>
        <p class="benevolat_soutenir_description"><?= $description_benevolat ?></p>
    </div>
</section>

<?php get_footer(); ?>
