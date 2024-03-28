<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/styles/visite.css">

    <link rel="stylesheet" href="/styles/settings.css">
    <link rel="stylesheet" href="/styles/style.css">

    <script src="javascript/header.js" defer></script>

    <title>Your visit</title>
</head>

<body>

    <?php require '../eng/header-bis.php'; ?>

    <nav class="breadcrumb-1" aria-label="Breadcrumb">
        <ul>
            <li><a href="/home">Home</a></li><span>&ensp; > &ensp;</span>
            <li>Your visit</li>
        </ul>
    </nav>

    <div class="visite">

        <img src="/img/visite.jpg" alt="">

        <div class="div">
            <div>
                <h2>Address</h2>
                <p class="mb o">2 Rue Albert Einstein, 77420</p>
            </div>

            <div>
                <h2>Visiting Hours</h2>
                <p>Monday: 10:00 AM - 8:00 PM</p>
                <p class="mb">Other days: 10:00 AM - 7:00 PM</p>
            </div>

            <div class="tarif">
                <h2>Pricing</h2>
                <h3>Reduced Rate: €16</h3>
                <p>For -18 years, 18-26 years, students, teachers, lecturers, and job seekers.</p>
                <h3>Full Rate: €25</h3>
                <p>For 26+ years</p>
            </div>
        </div>

    </div>





    <?php require '../eng/footer.php'; ?>


</body>

</html>