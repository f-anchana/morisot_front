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

    <title>About</title>
</head>

<body>

    <?php require '../eng/header-bis.php'; ?>


    <nav class="breadcrumb-1" aria-label="Breadcrumb">
        <ul>
            <li><a href="/">Home</a></li><span>&ensp; > &ensp;</span>
            <li>The Experience</li>
        </ul>
    </nav>

    <div class="titre-1">
        <div class="conteneur">
            <h1>An Immersive Discovery of <span class="font-2">Berthe Morisot</span></h1>
            <img src="../img/about-1.png" alt="">
        </div>
        <p>“I consider her to be the best artist among us” <span class="claude">- Claude Monet</span></p>
    </div>

    <section class="part-3">

        <img src="../img/exp1.png" alt="">

        <div>
            <h1>A Pioneer in the <span class="font-2">Shadows</span></h1>
            <p>150 years ago, on April 15, 1874, an exhibition in Paris brought together artists, painters, sculptors,
                engravers. All were excluded because their style was considered incomplete and mundane. This collective
                was identified as the impressionists, prominent figures such as Renoir, Degas,
                Monet, and Sisley participated in this exhibition, alongside the only woman in the group, Berthe
                Morisot.
            </p>
            <br>
            <p>This bold female painter contributed to the rise of impressionism despite the obstacles of the 19th
                century. We offer you a tête-à-tête with this exceptional figure, unjustly forgotten by
                history. Our exhibition is an invitation to discover her style, her intentions, and the significant
                influences
                that shaped her journey.
            </p>
        </div>

    </section>


    <section class="part-3">

        <div>
            <h1>A Journey into the <span class="font-2">Fourth Dimension...</span></h1>
            <p>Through virtual reality, you will become a true traveler, capable of entering and exploring
                Berthe Morisot's artistic universe intimately. You will have the opportunity to wander through her
                landscapes, approach her characters, and feel the energy of her works.
            </p>
        </div>

        <img src="../img/exp2.png" alt="">

    </section>


    <section class="part-3">

        <img src="../img/exp3.png" alt="">

        <div>
            <h1>An Acoustic <span class="font-2">Escape</span>,</h1>
            <p>Your journey will begin in a room reconstructed in the 19th-century Parisian aesthetic. To the sound
                of enchanting music, a shimmering image will come to life. Approach to hear the sounds emanating from
                the work, they will open the doors to Morisot's world for you.
            </p>
        </div>
    </section>


    <section class="part-3">

        <div>
            <h1>An Illusion in <span class="font-2">Color</span></h1>
            <p>Between shadow and light, discover the different aspects of her work where each shade contains a
                story, explore the secrets of her artistic genius as you navigate between the nuances of her
                works.
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
        <h1>How does the exhibition work ? </h1>
        
            <video controls>
                <source src="chemin_vers_video.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    <!-- <div class='commentaire'>
        <h2>Share your thoughts</h2>
        <form action='/commenter' method='POST'>
            <div class='form-group'>
                <label for='commentaire'>Comment:</label>
                <textarea id='commentaire' name='commentaire' required></textarea>
            </div>

            <div class='bouton'>
                <img src='../img/bouton.svg' alt=''>
                <input type='hidden' name='id_user' value='" . $_SESSION[' id_user'] . "'>
                <input class='texte' type='submit' name='commenter' value='Comment'>
            </div>

        </form>
    </div> -->
<!-- </div> -->
    </div>



    
</div>




    <?php

    require_once '../../API/model.php';
    
    if (isset($_SESSION['nom'])) {
    
        echo "<div class='commentaire'>
    <h2>Share your thoughts</h2>
    <form action='/comment' method='POST'>
        <div class='form-group'>
            <label for='commentaire'>Comment:</label>
            <textarea id='commentaire' name='commentaire' required></textarea>
        </div>
    
            <div class='bouton'>
            <img src='img/bouton.svg' alt=''>
            // <button class='texte' type='submit'>Envoyer</button>
            <input type='hidden' name='id_user' value='" . $_SESSION['id_user'] . "'>
            <input type='submit' name='commenter' value='Envoyer'>
        </div>
    
        </form>
</div>";
}else{
    echo "    <h2>Commentaire</h2><br>
    ";
}
    
    $comments = getComments();
    
    foreach ($comments as $comment) {
    
        $user = getUser($comment['ext_user']);
    
        echo "<div class='commentaire'>
    <p>" . $user['prenom'] . "</p>
    <p>" . $comment['content'] . "</p><br>
</div>";
}
        
    ?>

 <?php require '../eng/footer.php'; ?>



</body>