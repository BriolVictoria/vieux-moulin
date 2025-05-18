<?php
/* Template Name: Formulaire */
get_header();

$titre_formulaire = get_field('titre_formulaire');
$bouton_formulaire = get_field('bouton_formulaire');
$one_line_image_formulaire = get_field('one_line_image_formulaire');

?>

<section class="form">
    <h2 class="form_title"><?= $titre_formulaire ?></h2>
    <form class="form_container" action="#" method="get">
        <div class="form_row double">
            <div class="nom">
                <label class="nom_form" for="name">
                    <span class="titre_soulignement_form">Nom</span>
                </label>
                <input class="champs_form" type="text" name="name" id="name">
            </div>

            <div class="prenom">
                <label class="nom_form" for="prenom">
                    <span class="titre_soulignement_form">Prenom</span>
                </label>
                <input class="champs_form" type="text" name="prenom" id="prenom">
            </div>
        </div>


        <div class="form_row email">
            <label class="nom_form" for="email">
                <span class="titre_soulignement_form">Email</span>
            </label>
            <input class="champs_form" type="email" name="email" id="email">
        </div>

        <div class="form_row note">
            <label class="nom_form" for="note">
                <span class="titre_soulignement_form">Note</span>
            </label>
            <textarea class="champs_form" name="note" id="note" cols="30" rows="5"></textarea>
        </div>


    </form>
    <a class="form_boutton" href="<?= $bouton_formulaire['url'] ?>"><?= $bouton_formulaire['title'] ?></a>
    <img class="one_line_image_formulaire" src="<?= $one_line_image_formulaire['url'] ?>" alt="<?= $one_line_image_formulaire['alt'] ?>">
</section>

<?php get_footer(); ?>
