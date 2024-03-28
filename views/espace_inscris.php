<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/styles/espace_inscris.css">

    <link rel="stylesheet" href="/styles/settings.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="shortcut icon" href="img/logo_icon_noir.svg" type="image/svg">


    <script src="javascript/header.js" defer></script>

    <title>Mon espace</title>
</head>

<body>

    <?php
    session_start();
    require '../views/header-bis.php'; ?>

    <main class="espace">
        <section >
            <div>
                <h1>Espace <span class="font-2">personnel</span></h1>


                <?php
                // if (isset($_SESSION['nom'])) {
                //     // var_dump($_SESSION['email']);

                //     echo "<h2>Bienvenue " . $_SESSION['prenom'] . " " . $_SESSION['nom'] . "</h2>";
                // } else {
                //     header('Location: /connexion');
                // }

                ?>

                <!-- <h2>Mme Maria Ouedraogo</h2> -->
                <p class="welcome">
                    Bienvenue dans votre espace personnel. Vous pouvez y suivre vos commandes, accéder à vos offres
                    personnelles, imprimer vos billets et modifier vos coordonnées ou vos inscriptions aux newsletters.
                </p>
            </div>
            <a href="" class="button">modifier mes données</a>
        </section>

        <section class="btm_sec">
            <div>
                <h1>Votre dernière <span class="font-2">réservation</span></h1>
                <div>
                    <p>31.03.2024</p>
                    <p>16$</p>
                    <p>13h00</p>
                    <p class="welcome">Ombre et lumière</p>
                </div>
            </div>
            <a href="/mes-reservations" class="button">Voir</a>

        </section>

        <a href="/deconnexion" class="bouton">
            <div>
                <img src="../img/bouton.svg" alt="">
                <p class="ticket texte">Déconnexion</p>
            </div>
        </a>

    </main>

    <?php require '../views/footer.php'; ?>

</body>

</html>