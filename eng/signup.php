<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/settings.css">
    <link rel="stylesheet" href="../public/styles/style.css">
    <link rel="stylesheet" href="../public/styles/signup.css">

    <title>Document</title>
</head>

<body>

    <div class="container" data-aos='fade-in' data-aos-delay='700' data-aos-duration='700'>
        <div class="card">

            <div class="form">
                <h2>Connexion</h2>
                <form method='POST' action='index.php?action=traiteconnexion'>
                    <div>
                        <section class="names">
                            <section>
                                <label for="">nom</label>
                                <input type="text" id="username" name='' placeholder="Enter your name">
                            </section>
                            <section>
                                <label for="">prénom</label>
                                <input type="text" id="username" name='' placeholder="Enter your ">
                            </section>
                        </section>

                        <label for="">mot de passe</label>
                        <input type="password" id="" name='mdp_connexion' placeholder="Enter your password">


                        <label for="">mail</label>
                        <input type="text" id="username" name='' placeholder="Enter your username">

                        <label for="indicatif">Indicatif :</label>
                        <select id="indicatif" name="indicatif">
                            <option></option>
                            <option value="+49">Allemagne (+49)</option>
                            <option value="+43">Autriche (+43)</option>
                            <option value="+32">Belgique (+32)</option>
                            <option value="+359">Bulgarie (+359)</option>
                            <option value="+385">Croatie (+385)</option>
                            <option value="+45">Danemark (+45)</option>
                            <option value="+34">Espagne (+34)</option>
                            <option value="+358">Finlande (+358)</option>
                            <option value="+33">France (+33)</option>
                            <option value="+30">Grèce (+30)</option>
                            <option value="+36">Hongrie (+36)</option>
                            <option value="+353">Irlande (+353)</option>
                            <option value="+39">Italie (+39)</option>
                            <option value="+352">Luxembourg (+352)</option>
                            <option value="+47">Norvège (+47)</option>
                            <option value="+31">Pays-Bas (+31)</option>
                            <option value="+48">Pologne (+48)</option>
                            <option value="+351">Portugal (+351)</option>
                            <option value="+40">Roumanie (+40)</option>
                            <option value="+421">Slovaquie (+421)</option>
                            <option value="+386">Slovénie (+386)</option>
                            <option value="+46">Suède (+46)</option>
                            <option value="+41">Suisse (+41)</option>
                        </select>

                        <label for="">téléphone</label>
                        <input type="tel" id="" name="" pattern="[0-9]{10}" placeholder="7 59 21 36 47" required maxlength="10">
                        <button type="submit">connexion</button>
                    </div>
                </form>




</body>

</html>