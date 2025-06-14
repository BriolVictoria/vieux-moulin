<?php
/* Template Name: Nos foyers */
get_header();

$titre_foyer = get_field('titre_foyer');
$description_foyer = get_field('description_foyer');
$image_foyer = get_field('image_foyer');
$one_line_image_foyers = get_field('one_line_image_foyers');

$bouton_maison = get_field('bouton_maison');
$one_line_image_nos_foyers = get_field('one_line_image_nos_foyers');

$image_encadrement = get_field('image_encadrement');
$titre_encadrement = get_field('titre_encadrement');
$description_encadrement = get_field('description_encadrement');

$titre_galerie = get_field('titre_galerie');
$galerie_photo = get_field('galerie_photo');
$one_line_image_galerie = get_field('one_line_image_galerie');
$bouton_journee_type = get_field('bouton_journee_type');

$foyers = new WP_Query([
    'post_type' => 'foyer',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 2,
]);
?>

<section class="intro_foyers">
    <img class="one_line_image_foyers" src="<?= $one_line_image_foyers['url'] ?>"
         alt="<?= $one_line_image_foyers['title'] ?>">
    <div class="intro_container_foyers">
        <h2 class="intro_titre_foyers"><?= $titre_foyer ?></h2>
        <p class="intro_description_foyers"><?= $description_foyer ?></p>
    </div>
    <img class="intro_image_foyers" src="<?= $image_foyer['url'] ?>" alt="<?= $image_foyer['title'] ?>">
</section>

<section class="foyer_cartes">
    <img class="one_line_image_nos_foyers" src="<?= $one_line_image_nos_foyers['url'] ?>"
         alt="<?= $one_line_image_nos_foyers['title'] ?>">
    <?php if ($foyers->have_posts()): while ($foyers->have_posts()): $foyers->the_post(); ?>
        <article class="foyer_carte">

            <!-- Bloc texte -->
            <div class="foyer_carte_container">
                <header class="foyer_carte_text">
                    <h3 class="foyer_carte_titre">
                        <span class="titre_soulignement_foyer"><?= get_the_title(); ?></span>
                    </h3>
                </header>
            </div>
            <figure class="foyer_carte_fig">
                <?= get_the_post_thumbnail(size: 'medium', attr: ['class' => 'foyer_carte_image']); ?>
            </figure>
            <div class="bouton_container_foyer">
                <a class="bouton_foyer_cartes" title="Vers la page du Foyer" href="<?= get_permalink() ?>"><?= $bouton_maison['title'] ?></a>
            </div>

        </article>
    <?php endwhile; else: ?>
        <p>Je n'ai pas de foyers récents à montrer pour le moment...</p>
    <?php endif; ?>
</section>

<section class="encadrement">
    <div class="back_image_encadrement"></div>
    <img class="encadrement_image" src="<?= $image_encadrement['url'] ?>" alt="<?= $image_encadrement['alt'] ?>">
    <div class="encadrement_container">
        <h2 class="encadrement_titre"><?= $titre_encadrement ?></h2>
        <p class="encadrement_description"><?= $description_encadrement ?></p>
    </div>
</section>

<section class="galerie">
    <img class="one_line_image_galerie" src="<?= $one_line_image_galerie['url'] ?>"
         alt="<?= $one_line_image_galerie['alt'] ?>">

    <h2 class="titre_galerie"><?= $titre_galerie ?></h2>

    <div class="image_galerie_container">
        <?php foreach ($galerie_photo as $image): ?>
            <img class="galerie_photo" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
        <?php endforeach; ?>
    </div>
    <div class="bouton_container_journee">
        <a class="bouton_journee_type" title="Vers la page Journée type" href="<?= $bouton_journee_type['url'] ?>"><?= $bouton_journee_type['title'] ?></a>
    </div>
</section>

<?php get_footer(); ?>
