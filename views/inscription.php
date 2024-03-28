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

    <title>Registration</title>
</head>
<body>

<?php require '../views/header-bis.php'; ?>


<div class="container">
<div class="card form">
    <form id="mon-formulaire" action="/inscription" method='POST' onsubmit="return validateForm();">
        <?php 
        if(isset($erreur)){
            echo $erreur;
        }
        ?>

        <h1>Registration</h1>

        <div class="mdp">
        <div>
        <label for="nom_user">Your name</label>
        <input type="text" name="nom_user" id="nom_user" required="required">
        </div>

        <div>
        <label for="prenom_user">Your surname</label>
        <input type="text" name="prenom_user" id="prenom_user" required="required">
        </div>
        </div>

        <label for="numero">Your phone number</label>
        <input type="tel" name="numero" id="numero" required="required">

        <label for='email'>Enter your mail</label>
        <input type='email' name='email' id='email' required='required'>

        <label for="age">Enter your age</label>
        <input type="number" name="age" id="age" required="required" min="1">

        <label for='mdp1'>Set a password</label>
        <input type='password' name='mdp1' id='mdp1' required='required'>

        <label for='mdp2'>Verify your password</label>
        <input type='password' name='mdp2' id='mdp2' required='required'>
        <p id="error-message" style="color: red;"></p>


        <input type='submit' value='Confirm' id='submit' name='soumettre'>

    </form>


</div>
</div>


<?php require '../views/footer.php'; ?>

</body>
</html>
