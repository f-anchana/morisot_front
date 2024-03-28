<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/login.css">

    <link rel="stylesheet" href="../styles/settings.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="shortcut icon" href="img/logo_icon_noir.svg" type="image/svg">


    <script src="javascript/connexion.js" defer></script>

    <title>Login</title>
</head>

<body>

    <?php require '../views/header-bis.php'; ?>


    <?php
    session_start();
    if (isset($youpi)) {
        echo "<h2>" . $youpi . "</h2>";
    }
    if (isset($erreur)) {
        echo "<h2>" . $erreur . "</h2>";
    }

    // if (isset($_SESSION['nom'])) {
//     echo "<h2>Votre inscription a été prise en compte " . $_SESSION['prenom']. ", veuillez vous reconnecter" . "</h2>";
// } else {
//     echo "";
// }
    
    if (isset($_SESSION['nom'])) {
        header('Location: /mon-espace');
    }

    ?>



    <div class="container">
        <div class="card">
            <div class="image_form_login">
                <img src="../img/test.jpg" alt="">
            </div>
            <div class="form">
                <h1>Login</h1>
                <form action='/connexion' method='POST'>

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required="required">


                    <label for="mdp">Password</label>

                    <div class="mdp">
                        <input type="password" name="mdp" id="mdp" required="required">
                        <button type="button" id="showPasswordButton" onclick="togglePasswordVisibility()">Afficher</button>
                    </div>

                    <input type="submit" name="connexion" value="Sign in">

                    <p>You don't have an account? <a href="/inscription">Sign up</a></p>

                </form>
            </div>
        </div>
    </div>



    <?php require '../views/footer.php'; ?>

</body>

</html>