<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/styles/visite.css">

    <link rel="stylesheet" href="/styles/settings.css">
    <link rel="stylesheet" href="/styles/style.css">

    <script src="javascript/header.js" defer></script>

    <title>Votre visite</title>
</head>

<body>

    <?php require '../views/header-bis.php'; ?>

    <nav class="breadcrumb-1" aria-label="Breadcrumb">
        <ul>
            <li><a href="/">Accueil</a></li><span>&ensp; > &ensp;</span>
            <li>Votre visite</li>
        </ul>
    </nav>

    <div class="visite">

        <img src="/img/visite.jpg" alt="">

        <div class="div">
            <div>
                <h2>Adresse</h2>
                <p class="mb o">2 Rue Albert Einstein, 77420</p>
            </div>

            <div>
                <h2>Heure de visite</h2>
                <p>Lundi : 10:00 - 20:00</p>
                <p class="mb">Autre : 10:00 - 19:00</p>
            </div>

            <div class="tarif">
                <h2>La tarification</h2>
                <h3>Tarif réduit : 16 €</h3>
                <p>Pour les -18ans, les 18-26 ans, les étudiants, les enseignants, les conférenciers et les demandeurs
                    d'emploi.</p>
                <h3>Tarif plein : 25 €</h3>
                <p>Pour les +26 ans</p>
            </div>
        </div>

    </div>





    <?php require '../views/footer.php'; ?>


</body>

</html>