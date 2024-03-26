<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/settings.css">
    <link rel="stylesheet" href="/styles/accueil.css"> 
    <link rel="stylesheet" href="styles/header.css"> 
    <link rel="stylesheet" href="/styles/footer.css">    


    <script src="javascript/header.js" defer></script>


    <title>Ombre et Lumière</title>
</head>
<body>

<?php

require '../views/header.php';
?>

<section class="part-1">

    <div class='home-info'>
        <h1>Shadows <span class="and">and</span><span class="light">li<span class="font-1">ghts</span></span></h1>
        <p>Découvrez l'art de Berthe Morisot entre ombre et lumière : une exposition captivante qui éclaire votre esprit
            et joue avec vos sens</p>
    </div>

    <img class="home-img" src="../img/home-1.png" alt="">
    <img class="home-img-2" src="../img/home-1-bis.png" alt="">
    <img class="home-img-3" src="../img/home-3.png" alt="">

</section>


<section class="part-2">

    <h1>Une expérience immersive <span class="font-2">multisensorielle</span></h1>


    <div class="morisot">

        <img  class="portrait"src="img/home-2.png" alt="">

        <div class="information">

            <div class="info">
                <p>31 mars . 30 avril / 2024</p>
                <p>Découvrez Berthe Morisot, une artiste éminente du mouvement impressionniste, dans une expérience en
                    réalité
                    virtuelle inédite où vos sens fusionne avec la réalité. Traversez les portes de son univers, vivez
                    des
                    moments
                    clefs de son parcours et laissez vous emporter par de douces mélodies dans la quatrième dimension.
                </p>
            </div>



            <a href="" class="bouton">
                <div>
                    <img src="../img/bouton.svg" alt="">
                    <p class="ticket texte">Découvrir</p>
                </div>
            </a>
        </div>
    </div>

</section>

<?php

require '../views/footer.php';
?>