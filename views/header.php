<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <title>Ombre et lumière</title>

    <nav>
        <main>
            <h1>menu </h1>
            <a href="/">Accueil </a> <br>
            <a href="<?= $this->router->generate('oeuvres') ?>">Oeuvre </a><br>
            <!-- <a href="/oeuvres">Oeuvre </a><br> -->
            <a href="">Ressources </a><br>
            <a href="">Votre visite </a><br>
            <a href="">l'expérience </a>
            <a href="">Billeterie </a>
        </main>
    </nav>
</head>
<body>
