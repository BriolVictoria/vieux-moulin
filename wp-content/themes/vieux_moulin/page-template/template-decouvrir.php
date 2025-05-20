<?php
/* Template Name: Nous découvrir */
get_header();

$image_vieuxmoulin = get_field('image_vieuxmoulin');
$titre_section_vieuxmoulin = get_field('titre_section_vieuxmoulin');

$titre_infromation = get_field('titre_infromation');
$description_infromation = get_field('description_infromation');
$galerie_image_information = get_field('galerie_image_information');
$one_line_image_galery = get_field('one_line_image_galery');
$bouton_journee_type = get_field('bouton_journee_type');

$titre_video = get_field('titre_video');
$video_video = get_field('video_video');
$one_line_image_video = get_field('one_line_image_video');

$titre_section_foyer = get_field('titre_section_foyer');
$bouton_foyer = get_field('bouton_foyer');
$one_line_image_foyer = get_field('one_line_image_foyer');

$titre_information = get_field('titre_information');
$description_information = get_field('description_information');
$one_line_image_information = get_field('one_line_image_information');
$carnet_daccueil = get_field('carnet_daccueil');
$projet_educatif = get_field('projet_educatif');

$titre_soutient = get_field('titre_soutient');
$image_soutient_1 = get_field('image_soutient_1');
$image_soutient = get_field('image_soutient');


$foyers = new WP_Query([
    'post_type' => 'foyer',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 2,
]);

?>

<section class="introduction_vieuxmoulin">
    <img class="image_vieuxmoulin" src="<?= $image_vieuxmoulin['url'] ?>" alt="<?= $image_vieuxmoulin['alt'] ?>">
    <h2 class="titre_vieuxmoulin">
        <span class="soulignement_titre_vieuxmoulin"><?= $titre_section_vieuxmoulin ?></span>
    </h2>
</section>

<section class="information">
    <img class="one_line_image_galery" src="<?= $one_line_image_galery['url'] ?>" alt="<?= $one_line_image_galery['alt'] ?>">
    <h2 class="information_titre"><?= $titre_infromation ?></h2>
    <p class="information_description"><?= $description_infromation ?></p>
    <div class="image_galerie_container">
        <?php foreach ($galerie_image_information as $image): ?>
            <img class="galerie_image_information" src="<?= $image['url'] ?>"
                 alt="<?= $image['alt'] ?>">
        <?php endforeach; ?>
    </div>
    <div class="bouton_container_journee">
        <a class="bouton_journee_type" href="<?= $bouton_journee_type['url'] ?>"><?= $bouton_journee_type['title'] ?></a>
    </div>
</section>

<section class="video">
    <img class="one_line_image_video" src="<?= $one_line_image_video['url'] ?>" alt="<?= $one_line_image_video['alt'] ?>">
    <h2 class="video_titre"><?= $titre_video ?></h2>
    <div class="video_container">
        <video class="video_video" src="<?= $video_video['url'] ?>" muted loop autoplay ><?= $video_video['title'] ?></video>
    </div>

</section>

<section class="foyer">
    <img class="one_line_image_foyer" src="<?= $one_line_image_foyer['url'] ?>"
         alt="<?= $one_line_image_foyer['alt'] ?>">
    <h2 class="titre_foyer">
        <span class="titre_soulignement_foyer"><?= $titre_section_foyer ?></span>
    </h2>

    <div class="foyer_container">

        <?php if ($foyers->have_posts()): while ($foyers->have_posts()): $foyers->the_post(); ?>
            <article class="foyer_post">
                <figure class="foyer_fig">
                    <?= get_the_post_thumbnail(size: 'medium', attr: ['class' => 'foyer_img']); ?>
                </figure>

                <!-- Bloc texte -->
                <div class="foyer_content">
                    <header class="foyer_head">
                        <h3 class="foyer_title"><?= get_the_title(); ?></h3>
                    </header>
                    <p class="description_foyer"><?= get_the_excerpt() ?></p>
                </div>
            </article>
        <?php endwhile; else: ?>
            <p>Je n'ai pas d'actualités récents à montrer pour le moment...</p>
        <?php endif; ?>

    </div>

    <div class="bouton_container">
        <a class="bouton_foyer" href="<?= $bouton_foyer['url'] ?>"><?= $bouton_foyer['title'] ?></a>
    </div>

</section>

<section class="information_document">
    <img class="one_line_image_information" src="<?= $one_line_image_information['url'] ?>" alt="<?= $one_line_image_information['alt'] ?>">
    <h2 class="titre_document">
        <span class="soulignement_titre_document"><?= $titre_information ?></span>
    </h2>
    <p class="description_document"><?= $description_information ?></p>
    <div class="document_boutons">
        <div class="bouton_container_document">
            <a class="carnet_daccueil" href="<?= $carnet_daccueil['url'] ?>"><?= $carnet_daccueil['title'] ?></a>

            <a class="projet_educatif" href="<?= $projet_educatif['url'] ?>"><?= $projet_educatif['title'] ?></a>
        </div>
    </div>
</section>

<section class="soutient">
    <h2 class="soutient_titre">
        <span class="soulignement_titre_soutient"><?= $titre_soutient ?></span>
    </h2>
    <div class="image_container_vieuxmoulin">
        <img  class="soutient_image" src="<?= $image_soutient_1['url'] ?>" alt="<?= $image_soutient_1['alt'] ?>">
        <img  class="soutient_image" src="<?= $image_soutient['url'] ?>" alt="<?= $image_soutient['alt'] ?>">
    </div>

</section>


<?php get_footer(); ?>
