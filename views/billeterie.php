<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billeterie</title>

    <link rel="stylesheet" href="../public/styles/billeterie.css">
    <link rel="stylesheet" href="../public/styles/style.css">
    <link rel="stylesheet" href="../public/styles/settings.css">

    <script src="../public/javascript/billeterie.js" defer></script>

</head>

<body>

    <nav class="breadcrumb-1" aria-label="Breadcrumb">
        <ul>
            <li><a href="">Accueil</a></li><span>&ensp; > &ensp;</span>
            <li>Billeterie</li>
        </ul>
    </nav>

    <div class="container">

        <form id="reservation-form" method="POST">

            <div aria-label="breadcrumb" class="breadcrumb">
                <span id="breadcrumbStep1" class="active">1 - Date et horaire</span>
                <span id="breadcrumbStep2">/ 2 - Nombre de billets</span>
                <span id="breadcrumbStep3">/ 3 - Coordonnées</span>
                <span id="breadcrumbStep4">/ 4 - Récapitulatif</span>
            </div>


            <div class="field-container">
                <fieldset id="step1" class="form-step active">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" min="<?php echo date('Y-m-d'); ?>" required><br><br>

                    <br><br>
                    <label for="time">Horaire:</label>
                    <select id="time" name="time" required>
                        <option value="">Sélectionnez un horaire</option>
                        <option value="09:00">09:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                        <option value="18:00">18:00</option>
                        <!-- Ajoutez d'autres options  -->
                    </select><br><br>
                    <div class="error-message" style="display: none;">Veuillez remplir tous les champs.</div>
                    <br><br>
                    <button type="button" onclick="nextStep()">Suivant</button>
                </fieldset>

                <fieldset id="step2" class="form-step">
                    <label for="tickets">Nombre de billets:</label>
                    <input type="number" id="tickets" name="tickets" min="1" required>
                    <div class="error-message" style="display: none;">Veuillez remplir ce champ.</div><br><br>
                    <button type="button" onclick="prevStep()">Précédent</button>
                    <button type="button" onclick="nextStep()">Suivant</button>
                </fieldset>

                <fieldset id="step3" class="form-step">
                    <label for="name">Nom:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <div class="error-message" style="display: none;">Veuillez remplir les champs.</div><br><br>

                    <button type="button" onclick="prevStep()">Précédent</button>
                    <button type="button" onclick="nextStep()">Suivant</button>
                </fieldset>

                <fieldset id="step4" class="form-step">


                    <div id="summary"></div>

                    <button type="button" onclick="prevStep()">Précédent</button>
                    <button type="submit">Réserver</button>
                </fieldset>

            </div>

        </form>

        <div class="preview">
            <img src="../public/img/test.jpg" alt="">
            <div id="previewTicket"></div>
        </div>

    </div>

</body>

</html>

</body>

</html>