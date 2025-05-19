<?php
get_header();

$one_line_image_par_projet = get_field('one_line_image_par_projet');
?>

        <section class="intro_foyers">
            <img class="one_line_image_foyers" src="<?= $one_line_image_par_projet['url'] ?>" alt="<?= $one_line_image_par_projet['title'] ?>">
            <div class="intro_container_foyers">
                <h2 class="intro_titre_foyers"><?= get_the_title(); ?></h2>
                <p class="intro_description_foyers"><?= get_the_content() ?></p>
            </div>
            <?= get_the_post_thumbnail(null, 'medium', ['class' => 'intro_image_foyers']) ?>
        </section>


<section>
    <?php
    if (have_rows('page_projet')):
        while (have_rows('page_projet')): the_row();
            $plan = get_sub_field('plan');
            $titre_plan = get_sub_field('titre_plan');
            $one_line_image_plan = get_sub_field('one_line_image_plan');
            $description_plan = get_sub_field('description_plan');
            $titre_galerie = get_sub_field('titre_galerie');
            $galerie = get_sub_field('galerie');
            $one_line_image_galerie = get_sub_field('one_line_image_galerie');
            ?>

            <section>
                <img class="one_line_image_plan" src="<?= $one_line_image_plan['url'] ?>" alt="<?= $one_line_image_plan['title'] ?>">
                <div class="intro_container_foyers">
                    <h2 class="titre_plan"><?= $titre_plan ?></h2>
                    <p class="description_plan"><?= $description_plan ?></p>
                </div>
                <img class="plan" src="<?= $plan['url'] ?>" alt="<?= $plan['title'] ?>">
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
        endwhile;
    endif;
    ?>
</section>

<?php

get_footer();
