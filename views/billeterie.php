<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/styles/billeterie.css">

    <link rel="stylesheet" href="/styles/settings.css">
    <link rel="stylesheet" href="/styles/style.css">

    <script src="javascript/header.js" defer></script>
    <script src="javascript/billeterie.js" defer></script>

    <title>Billeterie</title>
</head>

<body>

    <?php require '../views/header-bis.php'; ?>

    <nav class="breadcrumb-1" aria-label="Breadcrumb">
        <ul>
            <li><a href="/">Accueil</a></li><span>&ensp; > &ensp;</span>
            <li>Billeterie</li>
        </ul>
    </nav>


    <div class="billeterie">
        <h1>Réservez votre <span class="font-2">billet</span></h1>

        <div class="container">

            <form id="reservation-form" method="POST" action="/reserver">

                <div aria-label="breadcrumb" class="breadcrumb">
                    <p id="breadcrumbStep1" class="active">1 - Date et horaire</p>
                    <p id="breadcrumbStep2">&ensp;/ 2 - Nombre de billets</p>
                    <p id="breadcrumbStep3">&ensp;/ 3 - Coordonnées</p>
                    <p id="breadcrumbStep4">&ensp;/ 4 - Récapitulatif</p>
                </div>


                <div class="field-container">
                    <fieldset id="step1" class="form-step active">
                        <label for="date">Date</label><br>
                        <input type="date" id="date" name="date" min="<?php echo date('Y-m-d'); ?>" required
                            class="form-field"><br><br>

                        <label for="time">Horaire</label><br>
                        <select id="time" name="time" required class="form-field quantity">
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
                        </select><br><br>
                        <div class="message" style="display: none;">Veuillez remplir tous les champs.</div>
                        <br><br>

                        <div class='bouton'>
                            <img src='../img/next.svg' alt=''>
                            <button class='texte' type="button" onclick="suivant()">Suivant</button>
                        </div>

                    </fieldset>

                    <fieldset id="step2" class="form-step">
                        <table>
                            <tr>
                                <th></th>
                                <th>Prix ($)</th>
                                <th>Quantité</th>
                            </tr>
                            <tr class="reduit-1">
                                <td>Billet plein tarif</td>
                                <td>10</td>
                                <td>
                                    <input type="number" id="ptQuantity" min="0" max="5" value="0" required
                                        class="form-field quantite">
                                </td>
                            </tr>
                            <tr class="reduit-1">
                                <td>Billet tarif réduit</td>
                                <td>17</td>
                                <td><input type="number" id="trQuantity" min="0" max="5" value="0" required
                                        class="form-field quantite">
                                </td>
                            </tr>
                        </table><br><br>

                        <div class="message" style="display: none;">Veuillez remplir tous les champs.</div><br><br>

                        <div class="space_btn">
                            <div class='bouton'>
                                <img src='../img/preview.svg' alt=''>
                                <button class='texte preview' type="button" onclick="retour()">Précédent</button>
                            </div>

                            <div class='bouton'>
                                <img src='../img/next.svg' alt=''>
                                <button class='texte' type="button" onclick="suivant()">Suivant</button>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset id="step3" class="form-step">

                        <div class="kelis">
                            <div>
                                <label for="name">Nom</label><br>
                                <input type="text" id="name" name="nom_client" required class="form-field">
                            </div>
                            <div>
                                <label for="prénom">Prénom</label><br>
                                <input type="text" id="prénom" name="prenom_client" required class="form-field">
                            </div>
                        </div>

                        <div class="kelis">
                            <div>
                                <label for="téléphone">Téléphone</label><br><br>
                                <input type="tel" id="téléphone" name="tel_client" pattern="[0-9]{10}" maxlength="10"
                                    required class="form-field">
                            </div>

                            <div>
                                <label for="email">Mail</label><br><br>
                                <input type="email" id="email" name="email_client" required class="form-field">
                            </div>
                        </div>
                        <br><br>

                        <div class="message" style="display: none;">Veuillez remplir les champs.</div>

                        <div class="space_btn">
                            <div class='bouton'>
                                <img src='../img/preview.svg' alt=''>
                                <button class='texte preview' type="button" onclick="retour()">Précédent</button>
                            </div>

                            <div class='bouton'>
                                <img src='../img/next.svg' alt=''>
                                <button class='texte' type="button" onclick="suivant()">Suivant</button>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset id="step4" class="form-step">

                        <div id="summary"></div>

                        <div class="space_btn">
                        <div class='bouton'>
                            <img src='../img/preview.svg' alt=''>
                            <button class='texte preview' type="button" onclick="retour()">Précédent</button>
                        </div>

                        <div class='bouton'>
                            <img src='../img/next.svg' alt=''>
                            <input class='texte' type="submit" name='reserver' value="Réserver">
                        </div>
                        </div>

                    </fieldset>

                </div>

            </form>

            <div class="billet">
                <img src="img/test.jpg" alt="">
                <div id="billetTicket"></div>
            </div>


            <div class="field-container">
                <fieldset id="step1" class="form-step active">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" min="<?php echo date('Y-m-d'); ?>" required
                        class="form-field"><br><br>

                    <label for="time">Horaire:</label>
                    <select id="time" name="time" required class="form-field">
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
                    </select><br><br>
                    <div class="message" style="display: none;">Veuillez remplir tous les champs.</div>
                    <br><br>
                    <button type="button" onclick="suivant()">Suivant</button>
                </fieldset>

                <fieldset id="step2" class="form-step">
                    <table>
                        <tr>
                            <th>Type de billet</th>
                            <th>Prix ($)</th>
                            <th>Quantité</th>
                        </tr>
                        <tr>
                            <td>Billet plein tarif</td>
                            <td>10</td>
                            <td><input type="number" id="ptQuantity" min="0" value="0" class="form-field" max="10"></td>
                        </tr>
                        <tr>
                            <td>Billet tarif réduit</td>
                            <td>17</td>
                            <td><input type="number" id="trQuantity" min="0" value="0" class="form-field" max="10">
                            </td>
                        </tr>
                        <input type="hidden" id="prixTotal" name="prix_total" value="">
                        <input type="hidden" id="nbrBillets" name="nbr_billets" value="">

                    </table>
                    <div class="message" style="display: none;">Veuillez remplir ce champ.</div><br><br>
                    <button type="button" onclick="retour()">Précédent</button>
                    <button type="button" onclick="suivant()">Suivant</button>
                </fieldset>

                <fieldset id="step3" class="form-step">
                    <label for="name">Nom:</label>
                    <input type="text" id="name" name="nom_client" required class="form-field">

                    <label for="prénom">Prénom:</label>
                    <input type="text" id="prénom" name="prenom_client" required class="form-field">

                    <label for="téléphone">Téléphone:</label>
                    <input type="tel" id="téléphone" name="tel_client" pattern="[0-9]{10}" placeholder="7 59 21 36 47"
                        required maxlength="10" class="form-field">

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email_client" required class="form-field">

                    <div class="message" style="display: none;">Veuillez remplir les champs.</div><br><br>
                    <button type="button" onclick="retour()">Précédent</button>
                    <button type="button" onclick="suivant()">Suivant</button>
                </fieldset>

                <fieldset id="step4" class="form-step">


                    <div id="summary"></div>


                    <button type="button" onclick="retour()">Précédent</button>
                    <!-- <button type="submit">Réserver</button> -->
                    <input type="submit" name='reserver' value="Réserver">
                </fieldset>

            </div>

        </form>

        <div class="billet">
            <img src="img/test.jpg" alt="">
            <div id="billetTicket"></div>
        </div>
    </div>

    <?php require '../views/footer.php'; ?>


</body>

</html>