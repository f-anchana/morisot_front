<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ombre et Lumière">
    <meta name="keywords" content="exposition, Ombre et Lumière, Berthe Morisot, impressionnisme">

    <link rel="stylesheet" href="/styles/mes-reservations.css">

    <link rel="stylesheet" href="/styles/settings.css">
    <link rel="stylesheet" href="/styles/style.css">

    <link rel="shortcut icon" href="img/logo_icon_noir.svg" type="image/svg">


    <script src="javascript/header.js" defer></script>

    <title>Mes réservations</title>
</head>

<body>

<?php
require 'header-bis.php';

?>

    <div class="reservation-cards-container">
        <?php foreach ($reservations as $reservation): ?>
            <div class="reservation-card">
                <img src="img/test.jpg" alt="Image de la réservation">
                <div class="reservation-info">
                    <p>
                        <?php echo $reservation['nom_client']; ?>
                    </p>
                    <p>
                        <?php echo $reservation['email_client']; ?>
                    </p>
                    <p>
                        <?php echo $reservation['numero_client']; ?>
                    </p> <br><br>
                    <p><strong>Date:</strong>
                    <?php echo date_format(date_create($reservation['date_choisi']), 'd.m.Y') . ', ' . $reservation['horaire_choisi'] ; ?>
                    </p>
                    <p><strong>Prix:</strong>
                        <?php echo $reservation['prix_tota'] . '€'; ?>
                </div>
                <div class="reservation-buttons">
                    <button onclick='afficherPopupConfirmation(<?php echo $reservation["id_resa"]; ?>)'>Supprimer</button>
                    <button>Modifier</button>
                </div>

                <div class='popup-visible' id='popup-<?php echo $reservation["id_resa"]; ?>'>
                    <img src='/img/scream.webp' alt='' class=''>
                    <div class='mention'>
                        <p>Êtes-vous sûr.e ?</p>
                        <div class="liens">
                            <form action='/supprimer_reservation' method='POST'>
                                <input type='hidden' name='id_resa' value='<?php echo $reservation["id_resa"]; ?>'>
                                <input type='submit' value="Supprimer" class='btn-supprimer'></input>
                            </form>
                            <a href='javascript:void(0);' class='btn-annuler' onclick='annulerSuppression()'>Annuler</a>
                        </div>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>
    </div>

    <?php

    require 'footer.php';
    ?>


</body>

<script>
    function afficherPopupConfirmation(idResa) {
        let popup = document.getElementById('popup-' + idResa);
        popup.style.display = 'block';
    }

    function annulerSuppression() {
        let popups = document.querySelectorAll('.popup-visible');
        popups.forEach(function (popup) {
            popup.style.display = 'none';
        });
    }
</script>

</html>