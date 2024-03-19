<header>

    <div class="navigation">

        <a class="logo" href="">Logo</a>

        <div class="navigation-mobile">

            <label for="menu-icon" class="menu-icon">
                <input id="menu-icon" type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
            </label>

            <nav class="menu-burger">
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="<?= $this->router->generate('ressources') ?>">Ressources</a></li>
                    <li><a href="<?= $this->router->generate('votre.visite') ?>">Votre visite</a></li>
                    <li><a href="#">L'expérience</a></li>
                    <li><a href="<?= $this->router->generate('billeterie.accueil') ?>">Réserver</a></li>
                    <li class="language"><button>fr/en</button></li>
                    <li class="mute"><button><img src="../public/img/nav-son1.svg" alt="son"></button></li>
                </ul>
            </nav>

        </div>

        <nav class="navigation-desk">

            <ul>
                <li><a href="<?= $this->router->generate('ressources') ?>">Ressources</a></li>
                <li><a href="<?= $this->router->generate('votre.visite') ?>">Votre visite</a></li>
                <li><a href="#">L'expérience</a></li>
                <li class="language"><button>fr/en</button></li>
                <li class="mute"><button><img src="../public/img/nav-son1.svg" alt="son"></button></li>
                <li><a href="<?= $this->router->generate('billeterie.accueil') ?>">Réserver</a></li>
            </ul>

        </nav>

    </div>

</header>
