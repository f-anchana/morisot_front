<footer role="contentinfo" class="footer_mobile">
    <h1>Menu</h1>

    <nav class="footer_nav">
        <ul class="footer_nav_main">
            <li><a href="#">Accueil</a></li>
            <li><a href="<?= $this->router->generate('oeuvres') ?>">Oeuvres</a></li>
            <li><a href="<?= $this->router->generate('ressources') ?>">Ressources</a></li>
            <li><a href="<?= $this->router->generate('votre.visite') ?>">Votre visite</a></li>
            <li><a href="#">L'expérience</a></li>
            <li><a href="<?= $this->router->generate('billeterie.accueil') ?>">Billeterie</a></li>
        </ul>

        <aside class="footer_nav_aside">
            <div>
                <a href="#">Mentions légales 🡥</a>
            </div>
            <div>
                <a href="#">Politique de confidentialité 🡥</a>
            </div>
            <div>
                <a href="#">Politique de prix 🡥</a>
            </div>
        </aside>

        <aside class="footer_socials">
            <section>
                <div class="socials_img">
                    <img src="img/footer.png" alt="">
                </div>
                <p>5 Bd Descartes, <br> 77420 Champs-sur-Marne</p>
            </section>
        </aside>

        <aside>
            <p>+7 59 69 78 32</p>
            <a href="#">Youtube</a>
            <a href="#">Instagram</a>
            <a href="#">Tiktok</a>
        </aside>

    </nav>
</footer>



<footer role="contentinfo" class="body desk_footer">


    <nav class="footer_nav">
        <div>
            <h1>Menu</h1>
            <main class="footer_main_nav">
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="<?= $this->router->generate('oeuvres') ?>">Oeuvres</a></li>
                    <li><a href="<?= $this->router->generate('ressources') ?>">Ressources</a></li>
                </ul>
                <ul>
                    <li><a href="<?= $this->router->generate('votre.visite') ?>">Votre visite</a></li>
                    <li><a href="#">L'expérience</a></li>
                    <li><a href="<?= $this->router->generate('billeterie.accueil') ?>">Billeterie</a></li>
                </ul>
                <div class="politique">
                    <a href="#">Mentions légales 🡥</a>
                    <a href="#">Politique de confidentialité 🡥</a>
                    <a href="#">Politique de prix 🡥</a>
                </div>
            </main>
        </div>

        <section class="desk_socials_img">
            <img src="img/footer.png" alt="">
            <p>5 Bd Descartes, <br> 77420 Champs-sur-Marne</p>
        </section>
    </nav>

    <nav class="desk_socials">
        <p>+7 59 69 78 32</p>
        <a href="#">Youtube</a>
        <a href="#">Instagram</a>
        <a href="#">Tiktok</a>
    </nav>
</footer>