<?php
/* Template Name: Actualités */
get_header();

$image_actualite = get_field('image_actualite');
$titre_section_actualite = get_field('titre_section_actualite');

$titre_actualite_intro = get_field('titre_actualite_intro');
$description_actualite_intro = get_field('description_actualite_intro');
$image_actualite_intro = get_field('image_actualite_intro');
$one_line_image_actualite = get_field('one_line_image_actualite');

$image_cpt = get_field('image_cpt');

$actualites = new WP_Query([
    'post_type' => 'actualite',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 4,
]);

?>

<section class="actualite">
    <img class="image_actualite" src="<?= $image_actualite['url'] ?>" alt="<?= $image_actualite['alt'] ?>">
    <h2 class="titre_page_actualite">
        <span class="soulignement_titre_actualite"><?= $titre_section_actualite ?></span>
    </h2>
</section>

<section class=intro_actualite>
    <img class="one_line_image_intro_actualite" src="<?= $one_line_image_actualite['url'] ?>" alt="<?= $one_line_image_actualite['alt'] ?>">
    <div class="intro_container">
        <h2 class="intro_titre_actualite"><?= $titre_actualite_intro ?></h2>
        <p class="intro_description_actualite"><?= $description_actualite_intro ?></p>
    </div>
    <img class="intro_image_actualite" src="<?= $image_actualite_intro['url'] ?>" alt="<?= $image_actualite_intro['alt'] ?>">
</section>

<section>
    <ul class="actualite_list">
    <?php if($actualites->have_posts()): while($actualites->have_posts()): $actualites->the_post(); ?>
    <li>
        <article class="actualite_all" id="<?= sanitize_html_class(get_the_title()) ?>">

            <div class="actualite_all_text_container">
                <header class="actualite_all_head">
                    <h3 class="actualite_all_title"><?= get_the_title(); ?></h3>
                </header>
                <p class="actualite_all_description"><?= get_the_content() ?></p>
            </div>

            <figure class="actualite_all_fig">
                <div class="back_image_actualite_all"></div>

                <?= get_the_post_thumbnail(size: 'medium', attr: ['class' => 'actualite_all_img']); ?>
            </figure>

        </article>
    </li>
    <?php endwhile; else: ?>
        <p>Je n'ai pas d'actualités récents à montrer pour le moment...</p>
    <?php endif; ?>
    </ul>

</section>

<?php get_footer(); ?>
