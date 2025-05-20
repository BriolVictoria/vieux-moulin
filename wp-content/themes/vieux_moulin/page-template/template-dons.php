<?php
/* Template Name: Dons */
get_header();

$qr_code_commentfaire = get_field('qr_code_commentfaire');
$titre_commentfaire = get_field('titre_commentfaire');
$description_commentfaire = get_field('description_commentfaire');
$one_line_image_qrcode = get_field('one_line_image_qrcode');

$titre_formulaire = get_field('titre_formulaire');
$bouton_formualire = get_field('bouton_formualire');
$one_line_image_formulaire = get_field('one_line_image_formulaire');


?>

<section class="qrcode">
    <img class="one_line_image_qrcode" src="<?= $one_line_image_qrcode['url'] ?>" alt="<?= $one_line_image_qrcode['title'] ?>">
    <img class="qrcode_image"  src="<?= $qr_code_commentfaire['url'] ?>" alt="<?= $qr_code_commentfaire['alt'] ?>">
    <div class="qrcode_text">
        <h2 class="qrcode_titre"><?= $titre_commentfaire ?></h2>
        <p class="qrcode_description"><?= $description_commentfaire ?></p>
    </div>

</section>

<section class="form">
    <h2 class="form_title"><?= $titre_formulaire ?></h2>

    <form class="form_container" action="#" method="get">
        <div class="form_row double">
            <div class="nom">
                <label class="nom_form" for="name">
                    <span class="titre_soulignement_form">Nom</span>
                </label>
                <input class="champs_form" type="text" name="name" id="name" placeholder="Gold">
            </div>

            <div class="prenom">
                <label class="nom_form" for="prenom">
                    <span class="titre_soulignement_form">Prenom</span>
                </label>
                <input class="champs_form" type="text" name="prenom" id="prenom" placeholder="Joe">
            </div>
        </div>


        <div class="form_row email">
            <label class="nom_form" for="email">
                <span class="titre_soulignement_form">Email</span>
            </label>
            <input class="champs_form" type="email" name="email" id="email" placeholder="joe.gold@gmail.com">
        </div>

        <div class="form_row double">
            <div class="type">
                <label class="nom_form" for="type">
                    <span class="titre_soulignement_form">Type de dons</span>
                </label>
                <select class="champs_form" name="type" id="type">
                    <option value="materiel">Don matériel</option>
                    <option value="financier">Don financier</option>
                </select>
            </div>

            <div class="payement">
                <label class="nom_form" for="payement">
                    <span class="titre_soulignement_form">Moyen de payement</span>
                </label>
                <select class="champs_form" name="payement" id="payement">
                    <option value="visa">Visa</option>
                    <option value="autres">Autres</option>
                </select>
            </div>
        </div>

        <div class="form_row montant">
            <label class="nom_form" for="montant">
                <span class="titre_soulignement_form">Montant</span>
            </label>
            <input class="champs_form small" type="number" name="montant" id="montant"  placeholder="100">
        </div>

        <a class="form_boutton" href="<?= $bouton_formualire['url'] ?>"><?= $bouton_formualire['title'] ?></a>
        <img class="one_line_image_formulaire" src="<?= $one_line_image_formulaire['url'] ?>"
             alt="<?= $one_line_image_formulaire['alt'] ?>">

</section>

<?php get_footer(); ?>
