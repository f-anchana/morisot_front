<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/styles/espace_inscris.css">

    <link rel="stylesheet" href="/styles/settings.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="shortcut icon" href="img/logo_icon_noir.svg" type="image/svg">


    <script src="javascript/header.js" defer></script>

    <title>My Account</title>
</head>

<body>

    <?php
    session_start();
    require '../eng/header-bis.php'; ?>

    <main>
        <section>
            <div>
                <h1>Personal Space</h1>


                <?php
                if (isset($_SESSION['nom'])) {
                    // var_dump($_SESSION['email']);
                
                    echo "<h2>Bienvenue " . $_SESSION['prenom'] . " " . $_SESSION['nom'] . "</h2>";
                } else {
                    header('Location: /login');
                }

                ?>

                <!-- <h2>Mme Maria Ouedraogo</h2> -->
                <p class="welcome">
                    Welcome to your personal space. Here you can track your orders, access your personal offers,
                    print your tickets, and modify your contact information or newsletter subscriptions.
                </p>
            </div>
            <a href="" class="button">Edit my profile</a>
        </section>

        <section class="btm_sec">
            <div>
                <h1>Your Last Reservation</h1>
                <div>
                    <p>31.03.2024</p>
                    <p>$16</p>
                    <p>13h00</p>
                    <p class="welcome">Shadow and Light</p>
                </div>
            </div>
            <a href="/mes-reservations" class="button">View All</a>

        </section>
        <a href="/deconnexion" class="button logout">Logout</a>

    </main>

    <?php require '../eng/footer.php'; ?>

</body>

</html>