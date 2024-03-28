<footer role="contentinfo" class="footer_mobile">
    <h1>Menu</h1>

    <nav class="footer_nav">
        <ul class="footer_nav_main">
            <li><a href="/home">Home</a></li>
            <li><a href="<?= $this->router->generate('resources') ?>">Resources</a></li>
            <li><a href="<?= $this->router->generate('your.visit') ?>">Your Visit</a></li>
            <li><a href="<?= $this->router->generate('the.experience') ?>">The Experience</a></li>
            <li><a href="<?= $this->router->generate('ticketing') ?>">Ticketing</a></li>
        </ul>

        <aside class="footer_nav_aside">
            <div>
                <a href="/legal-notice">Legal Notice 🡥</a>
            </div>
            <div>
                <a href="/privacy-policy">Privacy Policy 🡥</a>
            </div>
            <div>
                <a href="/pricing-policy">Pricing Policy 🡥</a>
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
                    <li><a href="/home">Home</a></li>
                    <li><a href="<?= $this->router->generate('resources') ?>">Resources</a></li>
                    <li><a href="<?= $this->router->generate('your.visit') ?>">Your Visit</a></li>
                </ul>
                <ul>
                    <li><a href="<?= $this->router->generate('the.experience') ?>">The Experience</a></li>
                    <li><a href="<?= $this->router->generate('ticketing') ?>">Ticketing</a></li>
                    <a href="<?= $this->router->generate('legal-notice') ?>">Legal Notice 🡥</a>
                </ul>
                <div class="politique">
                    <a href="<?= $this->router->generate('privacy-policy') ?>">Privacy Policy 🡥</a>
                    <a href="<?= $this->router->generate('pricing-policy') ?>">Pricing Policy 🡥</a>
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
        <a href="https://www.instagram.com/ombreetlumiere_morisot/" target="_blank">Instagram</a>
        <a href="https://www.tiktok.com/@ombreetlumieres_morisot?lang=fr" target="_blank">Tiktok</a>
    </nav>
</footer>