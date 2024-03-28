<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/styles/ressources.css">

    <link rel="stylesheet" href="/styles/settings.css">
    <link rel="stylesheet" href="/styles/style.css">

    <script src="javascript/header.js" defer></script>

    <title>Podcast</title>
</head>

<body>

   <?php require '../eng/header-bis.php'; ?>

   <nav class="breadcrumb-1" aria-label="Breadcrumb">
        <ul>
            <li><a href="/home">Home</a></li><span>&ensp; > &ensp;</span>
            <li class="pt"><a href="<?= $this->router->generate('ressources') ?>">Ressources</a></li><span>&ensp; > &ensp;</span>
            <li>Podcast</li>
        </ul>
    </nav>





   <?php require '../eng/footer.php'; ?>


</body>

</html>




