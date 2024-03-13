    <nav>
        <main>
            <h1>menu </h1>
            <a href="/">Accueil </a> <br>
            <a href="<?= $this->router->generate('oeuvres') ?>">Oeuvre </a><br>
            <a href="<?= $this->router->generate('ressources') ?>">Ressources </a><br>
            <a href="<?= $this->router->generate('votre.visite') ?>">Votre visite </a><br>
            <a href="<?= $this->router->generate('billeterie.accueil') ?>">Billeterie </a><br>
            <a href="<?= $this->router->generate('erreur404') ?>">ERREUR404 </a><br>
        </main>
    </nav>