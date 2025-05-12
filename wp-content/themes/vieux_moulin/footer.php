</main>

<footer>

    <section class="top_header">
        <img class="logo" src="<?= get_site_icon_url('106') ?>" alt="Icône du site, initial de Vieux Moulin">
        <p>
            ASBL Le Vieux Moulin Service Résidentiel Général
        </p>
        <h2>Nous contacter</h2>
        <p>Tel</p>
        <p>Email</p>
        <p>Lien</p>
        <p>Direction</p>
        <h2>Navigation</h2>
        <ul >
            <?php foreach (dw_get_navigation_links('header-menu') as $link): ?>
                <li class="lien">
                    <a href="<?= $link->href ?>" class="lien"><?= $link->label;?></a>
                </li>
            <?php endforeach;  ?>
        </ul>
    </section>

    <section class="bottom_footer">
        <p class="blog_info">© 2025 <?= get_bloginfo('name'); ?>. Tous droit réservé. Créé par Victoria Briol</p>
        <p class="mention">Mentions légales</p>
    </section>
    
    <section>
        <!--Image carte-->
    </section>

</footer>

</body>
</html>

<!--


