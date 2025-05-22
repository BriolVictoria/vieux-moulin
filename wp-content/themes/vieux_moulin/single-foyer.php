<?php
get_header();
$one_line_image_par_projet = get_field('one_line_image_par_projet');

$plan = get_field('plan');
$titre_plan = get_field('titre_plan');
$one_line_image_plan = get_field('one_line_image_plan');
$description_plan = get_field('description_plan');
$titre_galerie = get_field('titre_galerie');
$galerie = get_field('galerie');
$one_line_image_galerie = get_field('one_line_image_galerie');


?>
    <section class="intro_foyers">
        <img class="one_line_image_foyers" src="<?= $one_line_image_par_projet['url'] ?>"
             alt="<?= $one_line_image_par_projet['title'] ?>">
        <div class="intro_container_foyers">
            <h2 class="intro_titre_foyers"><?= get_the_title(); ?></h2>
            <p class="intro_description_foyers"><?= get_the_content() ?></p>
        </div>
        <?= get_the_post_thumbnail(null, 'medium', ['class' => 'intro_image_foyers']) ?>
    </section>

<section class="location">
    <?php
    $location = get_field('plan');

    if( $location ): ?>
        <div class="acf-map"
             data-lat="<?php echo esc_attr($location['lat']); ?>"
             data-lng="<?php echo esc_attr($location['lng']); ?>"
             data-zoom="<?php echo esc_attr($location['zoom']); ?>">

        </div>
            <p><?php echo esc_html($location['address']); ?></p>
    <?php endif; ?>
    <img class="one_line_image_plan" src="<?= $one_line_image_plan['url'] ?>"
         alt="<?= $one_line_image_plan['title'] ?>">
    <div class="location_container">
        <h2 class="titre_plan"><?= $titre_plan ?></h2>
        <p class="description_plan"><?= $description_plan ?></p>
    </div>
</section>

    <section class="galerie">
        <img class="one_line_image_galerie" src="<?= $one_line_image_galerie['url'] ?>"
             alt="<?= $one_line_image_galerie['alt'] ?>">

        <h2 class="titre_galerie"><?= $titre_galerie ?></h2>

        <div class="image_galerie_container">
            <?php foreach ($galerie as $image): ?>
                <img class="galerie_photo" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
            <?php endforeach; ?>
        </div>
    </section>

<?php

get_footer();
