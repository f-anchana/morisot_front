<header>

    <div class="navigation">

        <a class="logo mobile" href="/home"><img src="img/logo_icon_noir.svg"></a>

        <div class="navigation-mobile">

            <label for="menu-icon" class="menu-icon-bis">
                <input id="menu-icon" type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
            </label>

            <nav class="menu-burger">
                <ul>
                    <li><a href="/home">Home</a></li>
                    <li><a href="<?= $this->router->generate('resources') ?>">Event</a></li>
                    <li><a href="<?= $this->router->generate('your.visit') ?>">Your Visit</a></li>
                    <li><a href="<?= $this->router->generate('the.experience') ?>">The Experience</a></li>
                    <li><a href="<?= $this->router->generate('ticketing') ?>">Ticketing</a></li>
                    <li class="language"><a class="lower" href="/" >fr / en</a></li>
                </ul>
            </nav>

        </div>


        <div class="navigation-desk">

            <a class="logo desk" href="/home"><img src="img/logo_icon_noir.svg"></a>

            <nav>
                <ul>
                    <li><a href="<?= $this->router->generate('resources') ?>">Event</a></li>
                    <li><a href="<?= $this->router->generate('your.visit') ?>">Your Visit</a></li>
                    <li><a href="<?= $this->router->generate('the.experience') ?>">The Experience</a></li>
                </ul>

                <ul>
                    <li><a href="<?= $this->router->generate('login') ?>"><img class="icon" src="../img/icon.svg" alt="login"></a></li>
                    <li class="language"><a class="lower" href="/" >fr / en</a></li>
                    <li><a class="bouton billeterie" href="<?= $this->router->generate('ticketing') ?>">
                            <div id="image-container">
                                <img id="default-image" src="../img/nav-ticket1.svg" alt="">
                                <li><a href="<?= $this->router->generate('ticketing') ?>">Ticketing</a></li>
                                <p class="brown text">Ticketing</p>
                            </div>
                        </a>
                    </li>
                </ul>


            </nav>
        </div>

    </div>

</header>