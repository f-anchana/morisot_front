<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/experience.css">

    <link rel="stylesheet" href="../styles/settings.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="shortcut icon" href="img/logo_icon_noir.svg" type="image/svg">


    <script src="javascript/header.js" defer></script>

    <title>À propos</title>
</head>

<body>

    <?php require '../views/header-bis.php'; ?>


    <nav class="breadcrumb-1" aria-label="Breadcrumb">
        <ul>
            <li><a href="/">Accueil</a></li><span>&ensp; > &ensp;</span>
            <li>L'expérience</li>
        </ul>
    </nav>

    <div class="titre-1">
        <div class="conteneur">
            <h1>Une découverte immersive de <span class="font-2">Berthe Morisot</span></h1>
            <img src="../img/about-1.png" alt="">
        </div>
        <p>“Je la tiens comme la meilleure artiste parmi nous” <span class="claude">- Claude Monet</span></p>
    </div>

    <section class="part-3">

        <img src="../img/exp1.png" alt="">

        <div>
            <h1>Une pionnière restée dans <span class="font-2">l'Ombre</span></h1>
            <p>Il y a 150 ans, le 15 avril 1874, une exposition réunissait à Paris des artistes, peintres, sculpteurs,
                graveurs. Tous étaient exclus parce que leur style était considéré comme incomplet et mondain. Ce
                collectif a été identifié comme les impressionnistes, des figures éminentes telles que Renoir, Degas,
                Monet et Sisley ont participé à cette exposition, aux côtés de la seule femme du groupe, Berthe Morisot.
            </p>
            <br>
            <p> Cette femme peintre audacieuse, a contribué à l'essor de l'impressionnisme malgré les obstacles du 19e
                siècle. Nous vous proposons un tête à tête cette figure exceptionnelle, injustement oubliée par
                l'histoire. Notre exposition est une invitation à découvrir son style, ses intentions et les influences
                marquantes qui ont façonné son parcours.
            </p>
        </div>

    </section>


    <section class="part-3">

        <div>
            <h1>Un voyage dans la <span class="font-2">4e dimension …</span></h1>
            <p>À travers la réalité virtuelle, vous deviendrez un véritable voyageur, capable de pénétrer et d'explorer
                l’univers artistique de Berthe Morisot de manière intime. Vous aurez l'opportunité de vous promener à
                travers ses paysages, de vous approcher de ses personnages, et de ressentir l'énergie de ses œuvres. 
            </p>
        </div>

        <img src="../img/exp2.png" alt="">

    </section>


    <section class="part-3">

        <img src="../img/exp3.png" alt="">

        <div>
            <h1>Une échappée <span class="font-2">acoustique</span>,</h1>
            <p>Votre voyage débutera dans une chambre reconstituée dans l'esthétique parisienne du 19e siècle. Au son
                d'une
                musique envoûtante, une image scintillante prendra vie. Approchez-vous pour entendre les sons qui
                émanent de
                l'œuvre, ils vous ouvriront les portes dans le monde de Morisot. 
            </p>
        </div>
    </section>


    <section class="part-3">

        <div>
            <h1>Une illusion en <span class="font-2">couleur</span></h1>
            <p>Entre ombre et lumière, découvrez les différents aspects de son œuvre où chaque nuance renferme une
                histoire, explorez les secrets de son génie artistique alors que vous naviguez entre les nuances des ses
                œuvres. 
            </p>
        </div>

        <img src="../img/exp4.png" alt="">

    </section>

    <section class="oeuvres">
    <div class="parent">
         <div class="kids">
            <div class="babies one">
               <div class="img">
                  <img src='../img/o-1.png' alt=''>
               </div>
            </div>
            <div class="babies two">
               <img src='../img/o-2.png' alt=''>
            </div>
         </div>
         <div class="kids ">
            <div class="babies three">
               <img src='../img/o-3.png' alt=''>
            </div>
            <div class="babies four">
               <img src='../img/o-4.png' alt=''>
            </div>
         </div>
         <div class="kids">
            <div class="babies five">
               <img src='../img/o-5.png' alt=''>
            </div>
            <div class="babies six">
               <img src='../img/o-6.png' alt=''>
            </div>
         </div>
         <div class="kids">
            <div class="babies seven">
               <img src='../img/o-7.png' alt=''>
            </div>
            <div class="babies eight">
               <img src='../img/o-8.png' alt=''>
            </div>
         </div>
      </div>


    </section>

    <div class="video">
        <h1>Comment fonctionne l'exposition ? </h1>
        
            <video controls>
                <source src="chemin_vers_video.mp4" type="video/mp4">
            </video>
        </div>
    </div>


    

    <!-- <div class='commentaire'>
        <h2>Laissez un commentaire</h2>
        <form action='/commenter' method='POST'>
            <div class='form-group'>
                <label for='commentaire'>Commentaire:</label>
                <textarea id='commentaire' name='commentaire' required></textarea>
            </div>

            <div class='bouton'>
                <img src='../img/bouton.svg' alt=''>
                <input type='hidden' name='id_user' value='" . $_SESSION[' id_user'] . "'>
                <input class='texte' type='submit' name='commenter' value='Envoyer'>
            </div>

        </form>
    </div> -->
<!-- </div> -->


<div class='commentaire'>

    <?php

    // require_once '../../API/model.php';
    
    if (isset($_SESSION['nom'])) {
    
        echo "
    <h2>Laissez un commentaire</h2>
    <form action='/commenter' method='POST'>
        <div class='form-group'>
            <label for='commentaire'>Commentaire:</label>
            <textarea id='commentaire' name='commentaire' required></textarea>
        </div>
    
        <div class='bouton'>
            <img src='../img/bouton.svg' alt=''>
            <input type='hidden' name='id_user' value='" . $_SESSION['id_user'] . "'>
            <input class='texte' type='submit' name='commenter' value='Envoyer'>
        </div>
    
        </form>
";
}else{
    echo "    <h2>Commentaire</h2><br>
    ";
}

?>
</div>

<?php
    
    $comments = getComments();
    
    foreach ($comments as $comment) {
    
        $user = getUser($comment['ext_user']);
    
        echo "<div class='commentaire'>
    <p>" . $user['prenom'] . "</p>
    <p>" . $comment['content'] . "</p><br>
</div>";
}
    
    ?>

 <?php require '../views/footer.php'; ?>



</body>