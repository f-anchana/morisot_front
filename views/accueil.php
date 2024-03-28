<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ombre et Lumière">
    <meta name="keywords" content="exposition, Ombre et Lumière, Berthe Morisot, impressionnisme">

    <link rel="stylesheet" href="/styles/accueil.css">

    <link rel="stylesheet" href="/styles/settings.css">
    <link rel="stylesheet" href="/styles/style.css">

    <link rel="shortcut icon" href="img/logo_icon_noir.svg" type="image/svg">


    <script src="javascript/header.js" defer></script>

    <title>Ombre et Lumière</title>
</head>

<body>

    <?php require '../views/header.php'; ?>

    <section class="part-1">

        <div class='home-info'>
            <h1>Shadow <span class="and">and</span><span class="light">li<span class="font-1">ght</span></span></h1>
            <p>Découvrez l'art de Berthe Morisot entre ombre et lumière : une exposition captivante qui éclaire votre
                esprit et joue avec vos sens
            </p>
        </div>

        <img class="home-img" src="../img/home-1.png" alt="">
        <img class="home-img-2" src="../img/home-1-bis.png" alt="">
        <img class="home-img-3" src="../img/home-3.png" alt="">

    </section>


    <section class="part-2">

        <h1>Une expérience immersive <span class="font-2">multisensorielle</span></h1>

        <div class="morisot">
            <img class="portrait" src="img/home-2.png" alt="">

            <div class="information">

                <div class="info">
                    <p>Du 28 mars au 28 septembre / 2024</p>
                    <p>Découvrez Berthe Morisot, une artiste éminente du mouvement impressionniste, dans une expérience
                        en
                        réalité
                        virtuelle inédite où vos sens fusionne avec la réalité. Traversez les portes de son univers,
                        vivez
                        des
                        moments
                        clefs de son parcours et laissez vous emporter par de douces mélodies dans la quatrième
                        dimension.
                    </p>
                </div>

                <a href="<?= $this->router->generate('experience') ?>" class="bouton">
                    <div>
                        <img src="../img/bouton.svg" alt="">
                        <p class="ticket texte">Découvrir</p>
                    </div>
                </a>
            </div>
        </div>

    </section>

    <?php require '../views/footer.php'; ?>

</body>