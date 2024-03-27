<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/styles/annexes.css">

    <link rel="stylesheet" href="/styles/settings.css">
    <link rel="stylesheet" href="/styles/style.css">

    <script src="javascript/header.js" defer></script>

    <title>Legal Notice</title>
</head>

<body>

    <?php require '../views/header-bis.php'; ?>

    <div class="container">
        <h1>Legal Notice</h1><br>
        <h2>Publisher.</h2>
        <p>Ombre et lumière, 18, Rue du Faubourg Saint-Antoine, Paris 11th, Fictional SAS, registered with the Paris
            Trade and Companies Register under number RCS PARIS B 123456789, VAT identification number FR00 123 456 789.
            Contact us using our email address <a href="mailto:vision@ombreetlumiere.fr">vision@ombreetlumiere.fr</a>,
            or our phone number +33 0 12 34 56 78</p><br>

        <h2>Host.</h2>
        <p>O2SWITCH, CHE DES PARDIAUX 63000 CLERMONT-FERRAND, 04 44 44 60 40</p><br>

        <h2>Design and development.</h2>
        <p>Vision</p><br>

        <h2>Graphic design.</h2>
        <p>Vision</p><br>

        <h2>Editorial.</h2>
        <p>Vision</p><br>

        <h2>Warning.</h2>
        <p>Reproduction, representation, translation, adaptation or quotation, whether in full or in part, by any means
            whatsoever, is strictly prohibited without the express permission of Ombre et Lumière, except in cases
            provided for by Article L.112-5 of the Intellectual Property Code. The trademarks mentioned remain the
            exclusive property of their respective owners.</p><br>

        <h2>Cookies.</h2>
        <p>The cookies used on this site are intended to record your language preferences and facilitate your user
            experience, notably by preserving your registration status. They store information such as names, first
            names, email addresses, as well as reservation details. It is crucial to note that these cookies have a
            limited lifespan, expiring at the end of your session, meaning they are temporary and deleted when you close
            your browser. As for reservation information, please note that it is kept for a period of 13 months, in
            accordance with the recommendations of the CNIL (National Commission for Information Technology and Civil
            Liberties).</p>
        <p>For more information, see our <a href="<?= $this->router->generate('privacy-policy') ?>">privacy policy</a>.
        </p><br>
    </div>

    <?php require '../views/footer.php'; ?>

</body>

</html>