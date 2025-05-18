<?php
get_header();

$actualites = new WP_Query([
    'post_type' => 'actualite',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 4,
]);
?>

<?php
if (have_rows('page_actualite')):
    while (have_rows('page_actualite')): the_row();
        $title = get_sub_field('titre_page_actualite');
        $content = get_sub_field('description_page_actualite');
        $img = get_sub_field('image_page_actualite');
        ?>


        <article>
            <div class="actualite_bpx">
                <div class="image_wrapper">
                    <div class="back_image_actualite"></div>
                    <?= get_the_post_thumbnail(null, 'medium', ['class' => 'image_page_actualite']) ?>
                </div>

                <div class="projet_texte">
                    <h3 class="titre_section_projet"><?= $title ?></h3>
                    <p class="projet_content"><?= $content ?></p>
                </div>

            </div>
        </article>


    <?php
    endwhile;
endif;
?>

<?php
get_footer();
