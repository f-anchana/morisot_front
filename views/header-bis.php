<header>

    <div class="navigation">

        <a class="logo mobile" href="/"><img src="img/logo_icon_noir.svg"></a>

        <div class="navigation-mobile">

            <label for="menu-icon" class="menu-icon-bis">
                <input id="menu-icon" type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
            </label>

            <nav class="menu-burger">
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="<?= $this->router->generate('ressources') ?>">Ressources</a></li>
                    <li><a href="<?= $this->router->generate('votre.visite') ?>">Votre visite</a></li>
                    <li><a href="<?= $this->router->generate('experience') ?>">L'expérience</a></li>
                    <li><a href="<?= $this->router->generate('billeterie') ?>">Billeterie</a></li>
                    <li class="language"><a class="lower" href="/home" >fr / en</a></li>
                </ul>
            </nav>

        </div>


        <div class="navigation-desk">

            <a class="logo desk" href="/"><img src="img/logo_icon_noir.svg"></a>

            <nav>
                <ul>
                    <li><a href="<?= $this->router->generate('ressources') ?>">Ressources</a></li>
                    <li><a href="<?= $this->router->generate('votre.visite') ?>">Votre visite</a></li>
                    <li><a href="<?= $this->router->generate('experience') ?>">L'expérience</a></li>
                </ul>

                <ul>
                    <li><a href="<?= $this->router->generate('connexion') ?>"><img class="icon" src="../img/icon.svg" alt="connexion"></a></li>
                    <li class="language"><a class="lower" href="/home" >fr / en</a></li>
                    <li><a class="bouton billeterie" href="<?= $this->router->generate('billeterie') ?>">
                            <div id="image-container">
                                <img id="default-image" src="../img/nav-ticket1.svg" alt="">
                                <img id="hover-image" src="../img/nav-ticket2.svg" alt="" style="display: none;">
                                <p class="brown texte">Billeterie</p>
                            </div>
                        </a>
                    </li>
                </ul>


            </nav>
        </div>

    </div>

</header>