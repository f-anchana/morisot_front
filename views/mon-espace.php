<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>hey user</h1>
<?php
session_start();

if (isset($_SESSION['nom'])) {
    echo "<h2>Bienvenue " . $_SESSION['nom'] . " " . $_SESSION['prenom'] . "</h2>";
} else {
    echo "<h2>Bienvenue utilisateur</h2>";
}

?>
</body>
</html>