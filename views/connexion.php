<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();
if (isset($youpi)) {
    echo "<h2>" . $youpi . "</h2>";
} if (isset($erreur)) {
    echo "<h2>" . $erreur . "</h2>";
}

if (isset($_SESSION['nom'])) {
    echo "<h2>Votre inscription a été prise en compte " . $_SESSION['prenom']. ", veuillez vous reconnecter" . "</h2>";
} else {
    echo "<h2>Bienvenue utilisateur</h2>";
}

?>

<form action="/connexion" method="POST">

<label for="email">Email</label>
<input type="email" name="email" id="email" required="required">

<label for="mdp">Mot de passe</label>
<input type="password" name="mdp" id="mdp" required="required">


<input type="submit" name="connexion" value="Se connecter">

</form>

</body>
</html>