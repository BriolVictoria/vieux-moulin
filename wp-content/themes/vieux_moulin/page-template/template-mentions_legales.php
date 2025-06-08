<?php
/* Template Name: Mentions légales */
get_header();

$titre_page = get_field('titre_page');
?>

    <div class="mentions_container">
        <h2 class="legal-title_page"><?= $titre_page ?></h2>
        <?php if (have_rows('mentions_legales')): ?>
            <?php while (have_rows('mentions_legales')): the_row();
                $titre_mention = get_sub_field('titre_mention');
                $description_mention = get_sub_field('description_mention');
                ?>
                <article class="mention">
                    <header class="legal-header">
                        <h3 class="legal-header__title"><?= $titre_mention ?></h3>
                    </header>
                    <ul class="legal-section__text"><?= $description_mention ?></ul>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>



<?php
get_footer();
