<?php
/* Template Name: Mentions légales */
get_header();
?>

    <div class="mentions_container">
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
