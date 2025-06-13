<?php
/* Template Name: Formulaire */
get_header();

$titre_formulaire = get_field('titre_formulaire');
$nom_champs = get_field('nom_champs');
$prenom_champs = get_field('prenom_champs');
$email_champs = get_field('email_champs');
$note_champs = get_field('note_champs');
$bouton_formulaire = get_field('bouton_formulaire');
$one_line_image_formulaire = get_field('one_line_image_formulaire');

?>

<?php
if (have_posts()): while (have_posts()): the_post(); ?>

    <section class="form">
        <h2 class="form_title"><?= $titre_formulaire; ?></h2>

        <?php
        $errors = $_SESSION['contact_form_errors'] ?? [];
        unset($_SESSION['contact_form_errors']);
        $success = $_SESSION['contact_form_success'] ?? false;
        unset($_SESSION['contact_form_success']);
        ?>

        <?php if ($success): ?>
            <div class="contact__success">
                <p><?= $success; ?></p>
            </div>
        <?php else: ?>
            <form class="form_container" action="<?= admin_url('admin-post.php'); ?>" method="POST">
                <div class="form_row double">
                    <div class="nom">
                        <label class="nom_form" for="lastname">
                            <span class="titre_soulignement_form"><?= $nom_champs ?></span>
                        </label>
                        <input class="champs_form" type="text" name="lastname" id="lastname" placeholder="Gold" value="<?= htmlspecialchars($_SESSION['old']['lastname'] ?? '') ?>">
                        <?php if (isset($errors['lastname'])): ?>
                            <p class="field__error"><?= $errors['lastname']; ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="prenom">
                        <label class="nom_form" for="firstname">
                            <span class="titre_soulignement_form"><?= $prenom_champs ?></span>
                        </label>
                        <input class="champs_form" type="text" name="firstname" id="firstname" placeholder="Joe" value="<?= htmlspecialchars($_SESSION['old']['firstname'] ?? '') ?>">
                        <?php if (isset($errors['firstname'])): ?>
                            <p class="field__error"><?= $errors['firstname']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form_row email">
                    <label class="nom_form" for="email">
                        <span class="titre_soulignement_form"><?= $email_champs ?></span>
                    </label>
                    <input class="champs_form" type="email" name="email" id="email" placeholder="joe.gold@gmail.com" value="<?= htmlspecialchars($_SESSION['old']['email'] ?? '') ?>">
                    <?php if (isset($errors['email'])): ?>
                        <p class="field__error"><?= $errors['email']; ?></p>
                    <?php endif; ?>
                </div>

                <div class="form_row note">
                    <label class="nom_form" for="message">
                        <span class="titre_soulignement_form"><?= $note_champs ?></span>
                    </label>
                    <textarea class="champs_form" name="message" id="message" cols="30" rows="5" placeholder="Votre message..."><?= htmlspecialchars($_SESSION['old']['message'] ?? '') ?></textarea>
                    <?php if (isset($errors['message'])): ?>
                        <p class="field__error"><?= $errors['message']; ?></p>
                    <?php endif; ?>
                </div>

                <div class="form__submit">
                    <input type="hidden" name="action" value="dw_submit_contact_form">
                    <button type="submit" class="form_boutton"><?= $bouton_formulaire['title']; ?></button>
                </div>
            </form>
        <?php endif; ?>

        <img class="one_line_image_formulaire" src="<?= $one_line_image_formulaire['url']; ?>" alt="<?= $one_line_image_formulaire['alt']; ?>">
    </section>

<?php endwhile; else: ?>
    <p>La page est vide.</p>
<?php endif; ?>


<?php get_footer(); ?>
