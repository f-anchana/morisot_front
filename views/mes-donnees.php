<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/mes-donnees.css">

    <link rel="stylesheet" href="../styles/settings.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="shortcut icon" href="img/logo_icon_noir.svg" type="image/svg">

    <script src="javascript/connexion.js" defer></script>

    <title>Mes données</title>

</head>
<body>
    
    <?php 

    require '../views/header-bis.php'; ?>


    <!-- <section class="informations-personnelles">
        <form action="/modifier-informations" method="POST">
        <h1>Informations Personnelles</h1>
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" value="<?php echo $_SESSION['nom']; ?>" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" value="<?php echo $_SESSION['prenom']; ?>" required>
        </div>
        <div class="form-group">
            <a href="/changer-mot-de-passe" class="change-password-link">Changer de mot de passe</a>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="numero">Numéro de téléphone (+33):</label>
            <input type="tel" id="numero" name="numero" value="<?php echo $_SESSION['numero']; ?>" required>
        </div>
        <div class="form-group">
            <button type="submit" class="submit-btn">Confirmer les changements</button>
        </div>
    </form>
</section> -->


    <section class="infos">
        <h1>Informations Personnelles</h1>
        <form action="/modifier-informations" method="POST">

        <div class="noms">

        <div class="nom">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" value="<?php echo $_SESSION['prenom']; ?>" required>
        </div>

        <div class="prenom">
        <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" value="<?php echo $_SESSION['nom']; ?>" required>
        </div>
        </div>

        <div class="mdp">
            <a href="/changer-mot-de-passe" class="change-password-link">Changer de mot de passe</a>
        </div>
        <div class="email">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" readonly="readonly">
        </div>
        
        <div class="numero">
            <label for="numero">Numéro de téléphone</label>
            <input type="tel" id="numero" name="numero" value="<?php echo $_SESSION['numero']; ?>" required>
        </div>


            <input type="submit" value="Confirmer les changements" class="submit-btn">

        </form>

    </section>


    <?php require '../views/footer.php'; ?>
</body>
</html>