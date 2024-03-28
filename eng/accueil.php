<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/styles/accueil.css">

    <link rel="stylesheet" href="/styles/settings.css">
    <link rel="stylesheet" href="/styles/style.css">

    <link rel="shortcut icon" href="img/logo_icon_noir.svg" type="image/svg">


    <script src="javascript/header.js" defer></script>

    <title>Shadow and Light</title>
</head>

<body>

    <?php require '../views/header.php'; ?>

    <section class="part-1">

        <div class='home-info'>
            <h1>Shadows <span class="and">and</span><span class="light">li<span class="font-1">ghts</span></span></h1>
            <p>Discover the art of Berthe Morisot between shadow and light: a captivating exhibition that enlightens
                your
                mind and plays with your senses.</p>
        </div>

        <img class="home-img" src="../img/home-1.png" alt="">
        <img class="home-img-2" src="../img/home-1-bis.png" alt="">
        <img class="home-img-3" src="../img/home-3.png" alt="">

    </section>


    <section class="part-2">

        <h1>An immersive <span class="font-2">multisensory</span> experience</h1>

        <div class="morisot">
            <img class="portrait" src="img/home-2.png" alt="">

            <div class="information">

                <div class="info">
                    <p>March 31 - April 30, 2024</p>
                    <p>Discover Berthe Morisot, a prominent artist of the Impressionist movement, in a unique virtual
                        reality
                        experience where your senses merge with reality. Step into her universe, experience key moments
                        of her
                        journey, and let yourself be carried away by gentle melodies in the fourth dimension.</p>
                </div>

                <a href="<?= $this->router->generate('experience') ?>" class="bouton">
                    <div>
                        <img src="../img/bouton.svg" alt="">
                        <p class="ticket texte">Discover</p>
                    </div>
                </a>
            </div>
        </div>

    </section>

    <?php require '../views/footer.php'; ?>

</body>