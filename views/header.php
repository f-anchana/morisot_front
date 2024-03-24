<header>

    <div class="navigation">

        <a class="logo mobile" href=""><img src="img/logo_icon.svg"></a>

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
                    <li class="language"><button>fr / en</button></li>
                </ul>
            </nav>

        </div>


        <div class="navigation-desk">

            <a class="logo desk" href=""><img src="img/logo_icon_noir.svg"></a>

            <nav>
                <ul>
                    <li><a href="<?= $this->router->generate('ressources') ?>">Ressources</a></li>
                    <li><a href="<?= $this->router->generate('votre.visite') ?>">Votre visite</a></li>
                    <li><a href="#">L'expérience</a></li>
                </ul>

                <ul>
                    <li><button>fr / en</button></li>
                    <li class="mute"><button><img src="../img/nav-son1.svg" alt="son"></button></li>
                    <li><a class="bouton billeterie" href="<?= $this->router->generate('billeterie.accueil') ?>">
                            <div id="image-container">
                                <img id="default-image" src="../img/nav-ticket1.svg" alt="">
                                <img id="hover-image" src="../img/nav-ticket2.svg" alt="" style="display: none;">
                                <p class="billet texte">Billeterie</p>
                            </div>
                        </a>
                    </li>
                </ul>


            </nav>
        </div>

    </div>

</header>