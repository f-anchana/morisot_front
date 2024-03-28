<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/login.css">

    <link rel="stylesheet" href="../styles/settings.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="shortcut icon" href="img/logo_icon_noir.svg" type="image/svg">


    <script src="javascript/inscription.js" defer></script>

    <title>S'inscrire</title>
</head>
<body>

<?php require '../eng/header-bis.php'; ?>


<div class="container">
<div class="card form">
    <form id="mon-formulaire" action="/inscription" method='POST' onsubmit="return validateForm();">
        <?php 
        if(isset($erreur)){
            echo $erreur;
        }
        ?>

        <h1>Inscription</h1>

        <div class="mdp">
        <div>
        <label for="nom_user">Votre nom</label>
        <input type="text" name="nom_user" id="nom_user" required="required">
        </div>

        <div>
        <label for="prenom_user">Votre prénom</label>
        <input type="text" name="prenom_user" id="prenom_user" required="required">
        </div>
        </div>

        <label for="numero">Votre numéro de téléphone</label>
        <input type="tel" name="numero" id="numero" required="required">

        <label for='email'>Entrez votre email</label>
        <input type='email' name='email' id='email' required='required'>

        <label for="age">Entrez votre âge</label>
        <input type="number" name="age" id="age" required="required" min="1">

        <label for='mdp1'>Définissez un mot de passe</label>
        <input type='password' name='mdp1' id='mdp1' required='required'>

        <label for='mdp2'>Vérifier votre mot de passe</label>
        <input type='password' name='mdp2' id='mdp2' required='required'>
        <p id="error-message" style="color: red;"></p>


        <input type='submit' value='Valider' id='submit' name='soumettre'>

    </form>


</div>
</div>

<?php require '../eng/footer.php'; ?>

</body>
</html>
