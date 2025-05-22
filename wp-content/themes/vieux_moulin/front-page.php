<?php
/* Template Name: Accueil */
get_header();

$titre_section_decouvrir = get_field('titre_section_decouvrir');
$description_decouvrir = get_field('description_decouvrir');
$image_decouvrir = get_field('image_decouvrir');
$bouton_decouvrir = get_field('bouton_decouvrir');
$one_line_image_decouvrir = get_field('one_line_image_decouvrir');

$titre_actualite = get_field('titre_actualite');
$bouton_actualite = get_field('bouton_actualite');
$one_line_image_actualite = get_field('one_line_image_actualite');
$one_line_image_actualite_2 = get_field('one_line_image_actualite_2');

$titre_section_foyer = get_field('titre_section_foyer');
$bouton_foyer = get_field('bouton_foyer');
$one_line_image_foyer = get_field('one_line_image_foyer');

$titre_section_benevolat = get_field('titre_section_benevolat');
$description_benevolat = get_field('description_benevolat');
$image_benevolat = get_field('image_benevolat');
$one_line_image_benevolat = get_field('one_line_image_benevolat');
$bouton_benevolat= get_field('bouton_benevolat');

$titre_section_partenaires = get_field('titre_section_partenaires');
$bouton_partenaire = get_field('bouton_partenaire');
$one_line_image_partenaire = get_field('one_line_image_partenaire');

$titre_section_famille = get_field('titre_section_famille');
$description_famille = get_field('description_famille');
$bouton_famille = get_field('bouton_famille');
$image_famille = get_field('image_famille');
$one_line_image_famille = get_field('one_line_image_famille');

$titre_section_projets = get_field('titre_section_projets');
$description_projets = get_field('description_projets');
$image_projets = get_field('image_projets');
$bouton_projets = get_field('bouton_projets');
$one_line_image_projet = get_field('one_line_image_projet');

$actualites = new WP_Query([
    'post_type' => 'actualite',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 3,
]);

$foyers = new WP_Query([
    'post_type' => 'foyer',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 2,
]);

$partenaires = new WP_Query([
    'post_type' => 'partenaire',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 3,
]);

?>

<section class="decouvrir">
    <div class="back_image_decouvrir"></div>
    <img class="image_decouvrir" src="<?= $image_decouvrir['url'] ?>" alt="<?= $image_decouvrir['alt'] ?>">
    <div class="decouvrir_container">
        <h2 class="titre_decouvrir"><?= $titre_section_decouvrir ?></h2>
        <p class="description_decouvrir"><?= $description_decouvrir ?></p>
        <div class="bouton_container_decouvrir">
            <a class="bouton_decouvrir" href="<?= $bouton_decouvrir['url'] ?>"><?= $bouton_decouvrir['title'] ?></a>
        </div>

    </div>
    <img class="one_line_image_decouvrir" src="<?= $one_line_image_decouvrir['url'] ?>"
         alt="<?= $one_line_image_decouvrir['alt'] ?>">
</section>

<section class="actualite">
    <img class="one_line_image_actualite" src="<?= $one_line_image_actualite['url'] ?>"
         alt="<?= $one_line_image_actualite['alt'] ?>">
    <img class="one_line_image_actualite_2" src="<?= $one_line_image_actualite_2['url'] ?>"
         alt="<?= $one_line_image_actualite_2['alt'] ?>">
    <h2 class="titre_actualite">
        <span class="titre_soulignement_actualite"><?= $titre_actualite ?></span>
    </h2>

    <div class="actualite_container">
        <?php if ($actualites->have_posts()): while ($actualites->have_posts()): $actualites->the_post(); ?>
            <article class="actualite_post">
                <a href="<?= get_permalink(173)?>/#<?= sanitize_html_class(get_the_title()) ?>" class="actualite_card_inner">
                    <figure class="actualite_fig">
                        <?= get_the_post_thumbnail(null, 'medium', ['class' => 'actualite_img']); ?>
                    </figure>
                    <header class="actualite_head">
                        <h3 class="actualite_title"><?= get_the_title(); ?></h3>
                        <p class="description_actualite"><?= get_the_date('d/m/Y'); ?></p>
                    </header>
                </a>
            </article>
        <?php endwhile; else: ?>
            <p>Je n'ai pas d'actualités récentes à montrer pour le moment...</p>
        <?php endif; ?>
    </div>
    <div class="bouton_container">
        <a class="bouton_actualite" href="<?= $bouton_actualite['url'] ?>">
            <?= $bouton_actualite['title'] ?>
        </a>
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

<section class="benevolat">
    <img class="one_line_image_benevolat" src="<?= $one_line_image_benevolat['url'] ?>"
         alt="<?= $one_line_image_benevolat['alt'] ?>">
    <div class="benevolat_container">
        <h2 class="titre_benevolat"><?= $titre_section_benevolat ?></h2>
        <p class="description_benevolat"><?= $description_benevolat ?></p>
        <div class="bouton_container_benevolat">
            <a class="bouton_benevolat" href="<?= $bouton_benevolat['url'] ?>">
                <?= $bouton_benevolat['title'] ?>
            </a>
        </div>
    </div>

    <div class="back_image_benevolat"></div>
    <img class="image_benevolat" src="<?= $image_benevolat['url'] ?>" alt="<?= $image_benevolat['alt'] ?>">

</section>

<section class="partenaires">
    <img class="one_line_image_partenaire" src="<?= $one_line_image_partenaire['url'] ?>"
         alt="<?= $one_line_image_partenaire['alt'] ?>">
    <h2 class="titre_partenaires">
        <span class="titre_soulignement_partenaires"><?= $titre_section_partenaires ?></span>
    </h2>

    <div class="partenaire_container">

        <?php if ($partenaires->have_posts()): while ($partenaires->have_posts()): $partenaires->the_post(); ?>
            <article class="partenaire_post">
                <figure class="partenaire_fig">
                    <?= get_the_post_thumbnail(size: 'medium', attr: ['class' => 'partenaire_img']); ?>
                </figure>
                <header class="partenaire_head">
                    <h3 class="partenaire_title"><?= get_the_title(); ?></h3>
                </header>
            </article>
        <?php endwhile; else: ?>
            <p>Je n'ai pas d'actualités récents à montrer pour le moment...</p>
        <?php endif; ?>
    </div>

</section>

<section class="famille">
    <h2 class="titre_famille">
        <span class="titre_soulignement_famille"><?= $titre_section_famille ?></span>
    </h2>
    <div class="famille_container">
        <img class="one_line_image_famille" src="<?= $one_line_image_famille['url'] ?>"
             alt="<?= $one_line_image_famille['alt'] ?>">
        <img class="image_famille" src="<?= $image_famille['url'] ?>" alt="<?= $image_famille['alt'] ?>">
        <div class="contenu_famille">
            <p class="description_famille"><?= $description_famille ?></p>
            <a class="bouton_famille" href="<?= $bouton_famille['url'] ?>"><?= $bouton_famille['title'] ?></a>
        </div>
    </div>
</section>


<section class="projet">
    <img class="one_line_image_projet" src="<?= $one_line_image_projet['url'] ?>"
         alt="<?= $one_line_image_projet['alt'] ?>">
    <div class="projet_container">
        <h2 class="titre_projet"><?= $titre_section_projets ?></h2>
        <p class="description_projet"><?= $description_projets ?></p>
    </div>
    <img class="image_projet" src="<?= $image_projets['url'] ?>" alt="<?= $image_projets['alt'] ?>">
</section>

<?php get_footer(); ?>


