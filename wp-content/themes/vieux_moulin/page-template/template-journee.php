<?php
/* Template Name: Journée type */
get_header();

$titre_introduction = get_field('titre_introduction');
$description_introduction = get_field('description_introduction');
$image_introduction = get_field('image_introduction');
$one_line_image_intro = get_field('one_line_image_intro');

$titre_faq = get_field('titre_faq');

$titre_section_foyer = get_field('titre_section_foyer');
$bouton_foyer = get_field('bouton_foyer');
$one_line_image_foyer = get_field('one_line_image_foyer');

$titre_galerie = get_field('titre_galerie');
$galerie_photo = get_field('galerie_photo');
$one_line_image_galerie = get_field('one_line_image_galerie');

$foyers = new WP_Query([
    'post_type' => 'foyer',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 2,
]);





$titre_question = get_field('titre_question');
?>

<section class="journee_intro">
    <img class="one_line_image_intro" src="<?= $one_line_image_intro['url'] ?>"
         alt="<?= $one_line_image_intro['title'] ?>">
    <div class="intro_container_journee">
        <h2 class="journee_intro_titre"><?= $titre_introduction ?></h2>
        <p class="journee_intro_description"><?= $description_introduction ?></p>
    </div>
    <img class="journee_intro_image" src="<?= $image_introduction['url'] ?>" alt="<?= $image_introduction['title'] ?>">
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
            <p>Je n'ai pas de foyer récent à montrer pour le moment...</p>
        <?php endif; ?>

    </div>

    <div class="bouton_container">
        <a class="bouton_foyer" title="Vers la page Foyers" href="<?= $bouton_foyer['url'] ?>"><?= $bouton_foyer['title'] ?></a>
    </div>

</section>
<!--FAQ
<section class="faq">
    <h2 class="titre_faq"><?php /*= $titre_faq */?></h2>
    <?php
/*    $faq = get_field('faq'); // Récupère le champ répéteur 'faq'

    if ($faq): // Si on a des questions
        foreach ($faq as $row):
            $titre_question = $row['titre_question'] ?? '';
            */?>
            <section class="faq_container">
                <p class="titre_question"><?php /*= $titre_question */?><span class="etoile">&#9733;</span></p>
            </section>
        <?php
/*        endforeach;
    else:
        echo '<p>Aucune question FAQ trouvée.</p>';
    endif;
    */?>
</section>
<pre>
<?php /*var_dump(get_field('faq')); */?>
</pre>-->

<section class="galerie">
    <img class="one_line_image_galerie" src="<?= $one_line_image_galerie['url'] ?>"
         alt="<?= $one_line_image_galerie['alt'] ?>">

    <h2 class="titre_galerie"><?= $titre_galerie ?></h2>

    <div class="image_galerie_container">
        <?php foreach ($galerie_photo as $image): ?>
            <img class="galerie_photo" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
        <?php endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>

