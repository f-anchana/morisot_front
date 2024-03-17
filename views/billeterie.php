<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billeterie</title>

    <link rel="stylesheet" href="../public/styles/billeterie.css">
    <link rel="stylesheet" href="../public/styles/style.css">

    <script src="../public/javascript/billeterie.js" defer></script>

</head>

<body>

    <div class="container">

        <form id="reservation-form">

            <div aria-label="breadcrumb" class="breadcrumb">
                <span id="breadcrumbStep1" class="active">1 - Date et horaire</span>
                <span id="breadcrumbStep2">/ 2 - Nombre de billets</span>
                <span id="breadcrumbStep3">/ 3 - Coordonnées</span>
                <span id="breadcrumbStep4">/ 4 - Récapitulatif</span>
            </div>


            <div class="field-container">
                <fieldset id="step1" class="form-step active">
                    <legend>Étape 1: Date et Horaire</legend>
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" min="<?php echo date('Y-m-d'); ?>" required><br><br>
                   
                    <br><br>
                    <label for="time">Horaire:</label>
                    <select id="time" name="time" required>
                        <option value="">Sélectionnez un horaire</option>
                        <option value="09:00">09:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <!-- Ajoutez d'autres options  -->
                    </select><br><br>
                    <div class="error-message" style="display: none;">Veuillez remplir tous les champs.</div>
                    <br><br>
                    <button type="button" onclick="nextStep()">Suivant</button>
                </fieldset>

                <fieldset id="step2" class="form-step">
                    <legend>Étape 2: Nombre de billets</legend>
                    <label for="tickets">Nombre de billets:</label>
                    <input type="number" id="tickets" name="tickets" min="1" required>
                    <div class="error-message" style="display: none;">Veuillez remplir ce champ.</div><br><br>
                    <button type="button" onclick="prevStep()">Précédent</button>
                    <button type="button" onclick="nextStep()">Suivant</button>
                </fieldset>

                <fieldset id="step3" class="form-step">
                    <legend>Étape 3: Coordonnées</legend>
                    <label for="name">Nom:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <div class="error-message" style="display: none;">Veuillez remplir les champs.</div><br><br>

                    <button type="button" onclick="prevStep()">Précédent</button>
                    <button type="button" onclick="nextStep()">Suivant</button>
                </fieldset>

                <fieldset id="step4" class="form-step">
                    



                    <button type="button" onclick="prevStep()">Précédent</button>
                    <button type="submit" >Réserver</button>
                </fieldset>

            </div>

        </form>

        <div class="preview">
            <h2>Aperçu du billet</h2>
            <div id="previewTicket"></div>
        </div>

    </div>

</body>

</html>

</body>

</html>