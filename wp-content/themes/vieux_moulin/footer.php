</main>

<footer>
    <section class="footer">

        <section>
            <img class="logo_footer" src="<?= get_site_icon_url('106') ?>" alt="Icône du site, initial de Vieux Moulin">
            <p class="asbl_footer">ASBL Le Vieux Moulin <br>Service Résidentiel Général</p>
        </section>

        <section>
            <div class="contacter">
                <h2 class="soulignement_footer">Nous contacter</h2>
                <p class="footer_boutton">
                    <span class="footer_element">SCHIMIT Jean-François GSM:</span> <a class="footer_boutton" target="_blank" title="Vers le numéro de téléphone de monsieur Jean-François Schimit"
                                                                                      href="tel:+32488774850">0488/774.850</a>

                    <span class="footer_element">Email:</span> <a class="footer_boutton" target="_blank" title="Vers le mail de la direction du Vieux moulin"
                                                                  href="mailto:direction@levm.be">direction@levm.be</a>
                </p>
                <a class="footer_boutton" target="_blank" title="Vers le numéro de téléphone du Vieux moulin" href="tel:+3263601150">063/60.11.50</a>
                <a class="footer_boutton" target="_blank" title="Vers le mail du Vieux moulin" href="mailto:srglevieuxmoulin@levm.be">
                    srglevieuxmoulin@levm.be
                </a>
                <a class="footer_boutton" target="_blank" title="Vers la localisation du vieux moulin"
                   href="https://www.google.com/maps/search/?api=1&query=Rue+des+Vennes+n%C2%B01+Strainchamps+6637+Fauvillers">
                    Rue des Vennes, n°1 Strainchamps 6637 Fauvillers
                </a>



            </div>
        </section>

        <section>
            <div class="navigation">
                <h2 class="soulignement_footer">Navigation</h2>
                <ul class="navigation_footer">
                    <?php foreach (dw_get_navigation_links('footer-menu') as $link): ?>
                        <li class="lien_footer footer_boutton">
                            <a  title="Vers la page <?= $link->label; ?>" href="<?= $link->href ?>" class="lien_navigation_footer"><?= $link->label; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>

        <section class="carte">
            <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2607.857971779085!2d5.6788238!3d49.877847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47eaa07fd84008a7%3A0x53bf82318872921c!2sRue%20des%20Vennes%2C%206637%20Fauvillers!5e0!3m2!1sfr!2sbe!4v1715685812345!5m2!1sfr!2sbe"
                    width="365"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </section>

        <div class="infos_supp">
            <p class="blog_info">© 2025 <?= get_bloginfo('name'); ?>. Tous droits réservés.</p>
            <a href="<?= get_permalink(get_page_by_path('mentions-legales')) ?>" class="mention_lien">Mentions légales</a>
        </div>

    </section>
</footer>


</body>
</html>


