<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/styles/billeterie.css">

    <link rel="stylesheet" href="/styles/settings.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="shortcut icon" href="img/logo_icon_noir.svg" type="image/svg">


    <script src="javascript/header.js" defer></script>
    <script src="javascript/billeterie.js" defer></script>

    <title>Ticketing</title>
</head>

<body>

    <?php require '../eng/header-bis.php'; ?>

    <nav class="breadcrumb-1" aria-label="Breadcrumb">
        <ul>
            <li><a href="/">Accueil</a></li><span>&ensp; > &ensp;</span>
            <li>Ticketing</li>
        </ul>
    </nav>


    <div class="billeterie">
    <h1>Book your <span class="font-2">ticket</span></h1>

        <div class="container">

            <form id="reservation-form" method="POST" action="/booking">

                <div aria-label="breadcrumb" class="breadcrumb">
                    <p id="breadcrumbStep1" class="active">1 - Date and time</p>
                    <p id="breadcrumbStep2">&ensp;/ 2 - Number of tickets</p>
                    <p id="breadcrumbStep3">&ensp;/ 3 - Contact information</p>
                    <p id="breadcrumbStep4">&ensp;/ 4 - Summary</p>
                </div>


                <div class="field-container">
                    <fieldset id="step1" class="form-step active">
                        <label for="date">Date</label><br>
                        <input type="date" id="date" name="date" min="<?php echo date('Y-m-d'); ?>" required
                            class="form-field"><br><br>

                        <label for="time">Time</label><br>
                        <select id="time" name="time" required class="form-field quantity">
                            <option value="">Select a time</option>
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
                        <div class="message" style="display: none;">Please fill out all fields.</div>
                        <br><br>

                        <div class='bouton'>
                            <img src='../img/next.svg' alt=''>
                            <button class='texte' type="button" onclick="suivant()">Next</button>
                        </div>

                    </fieldset>

                    <fieldset id="step2" class="form-step">
                        <table>
                            <tr>
                                <th></th>
                                <th>Price (€)</th>
                                <th>Quantity</th>
                            </tr>
                            <tr class="reduit-1">
                                <td>Full-price ticket</td>
                                <td>25</td>
                                <td>
                                    <input type="number" id="ptQuantity" min="0" value="0" required
                                        class="form-field quantite">
                                </td>
                            </tr>
                            <tr class="reduit-1">
                            <td>Reduced-price ticket</td>                                <td>16</td>
                                <td><input type="number" id="trQuantity" min="0" value="0" required
                                        class="form-field quantite">
                                </td>
                            </tr>
                        </table><br><br>

                        <div class="message" style="display: none;">Please fill out all fields.</div>

                        <div class="space_btn">
                            <div class='bouton'>
                                <img src='../img/preview.svg' alt=''>
                                <button class='texte preview' type="button" onclick="retour()">Previous</button>
                            </div>

                            <div class='bouton'>
                                <img src='../img/next.svg' alt=''>
                                <button class='texte' type="button" onclick="suivant()">Next</button>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset id="step3" class="form-step">
                        <input type="hidden" id="prixTotal" name="prix_total" value="">
                        <input type="hidden" id="nbrBillets" name="nbr_billets" value="">

                        <div class="kelis">
                            <div>
                                <label for="name">Name</label><br>
                                <input type="text" id="name" name="nom_client" required class="form-field">
                            </div>
                            <div>
                                <label for="prénom">Surname</label><br>
                                <input type="text" id="prénom" name="prenom_client" required class="form-field">
                            </div>
                        </div>

                        <div class="kelis">
                            <div>
                                <label for="téléphone">Phone</label><br><br>
                                <input type="tel" id="téléphone" name="tel_client" pattern="[0-9]{10}" maxlength="10"
                                    required class="form-field">
                            </div>

                            <div>
                                <label for="email">Email</label><br><br>
                                <input type="email" id="email" name="email_client" required class="form-field">
                            </div>
                        </div>
                        <br><br>

                        <div class="message" style="display: none;">Please fill out all fields.</div>

                        <div class="space_btn">
                            <div class='bouton'>
                                <img src='../img/preview.svg' alt=''>
                                <button class='texte preview' type="button" onclick="retour()">Previous</button>
                            </div>

                            <div class='bouton'>
                                <img src='../img/next.svg' alt=''>
                                <button class='texte' type="button" onclick="suivant()">Next</button>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset id="step4" class="form-step">

                        <div id="summary"></div>

                        <div class="space_btn">
                            <div class='bouton'>
                                <img src='../img/preview.svg' alt=''>
                                <button class='texte preview' type="button" onclick="retour()">Previous</button>
                            </div>

                            <div class='bouton'>
                                <img src='../img/next.svg' alt=''>
                                <input class='texte' type="submit" name='reserver' value="Book">
                            </div>
                        </div>

                    </fieldset>

                </div>

            </form>

            <div class="billet">
                <img src="img/test.jpg" alt="">
                <div id="billetTicket"></div>
            </div>

            </form>

        </div>

        <?php require '../eng/footer.php'; ?>


</body>

</html>