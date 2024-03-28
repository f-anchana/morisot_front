<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/styles/annexes.css">

    <link rel="stylesheet" href="/styles/settings.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="shortcut icon" href="img/logo_icon_noir.svg" type="image/svg">


    <script src="javascript/header.js" defer></script>

    <title>Mentions légales</title>
</head>

<body>

<?php require '../views/header-bis.php'; ?>

    <div class="container">
        <h1>Mentions légales</h1><br>
        <h2>Éditeur.</h2>
        <p>Ombre et lumière, 18, Rue du Faubourg Saint-Antoine, Paris 11e, SAS fictif, immatriculée au Registre du
            Commerce et des Sociétés de Paris sous le numéro RCS PARIS B 123456789, identification à la TVA FR00 123 456
            789. Contactez nous en utilisant notre adresse e-mail <a
                href="mailto:vision@ombreetlumiere.fr">vision@ombreetlumiere.fr</a>, ou notre numéro de téléphone +33 0
            12 34 56 78</p><br>

        <h2>Hébergeur.</h2>
        <p>O2SWITCH, CHE DES PARDIAUX 63000 CLERMONT-FERRAND, 04 44 44 60 40</p><br>

        <h2>Conception et développement.</h2>
        <p>Vision</p><br>

        <h2>Création graphique.</h2>
        <p>Vision</p><br>

        <h2>Rédaction.</h2>
        <p>Vision</p><br>

        <h2>Avertissement.</h2>
        <p>La reproduction, la représentation, la traduction, l'adaptation ou la citation, qu'elle soit totale ou
            partielle, par quelque moyen que ce soit, est formellement prohibée sans l'autorisation expresse de Ombre et
            Lumière, sauf dans les cas prévus par l'article L.112-5 du code de la propriété intellectuelle. Les marques
            mentionnées demeurent la propriété exclusive de leurs détenteurs respectifs.</p><br>

        <h2>Cookies.</h2>
        <p>Les cookies utilisés sur ce site visent à enregistrer vos préférences linguistiques et à faciliter votre
            expérience utilisateur, en préservant notamment votre statut d'inscription ou non. Ils stockent des
            informations telles que les noms, prénoms, adresses e-mail, ainsi que les détails des réservations. Il est
            crucial de souligner que ces cookies ont une durée de vie limitée, expirant dès la fin de votre session, ce
            qui signifie qu'ils sont temporaires et supprimés lorsque vous fermez votre navigateur. Pour ce qui est des
            informations relatives aux réservations, veuillez noter qu'elles sont conservées pendant une période de 13
            mois, conformément aux recommandations du CNIL (Commission Nationale de l'Informatique et des Libertés).</p>
        <p>Pour en savoir plus, consultez notre <a href="<?= $this->router->generate('politique-confidentialite') ?>">politique de
                confidentialité</a>.</p><br>
    </div>

    <?php require '../views/footer.php';?>

</body>

</html>