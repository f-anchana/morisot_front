<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="/styles/oeuvres.css">

   <link rel="stylesheet" href="/styles/settings.css">
   <link rel="stylesheet" href="/styles/style.css">

   <script src="javascript/header.js" defer></script>

   <title>Oeuvres</title>
</head>

<body>

   <?php require '../views/header-bis.php'; ?>

   <nav class="breadcrumb-1" aria-label="Breadcrumb">
        <ul>
            <li><a href="/">Accueil</a></li><span>&ensp; > &ensp;</span>
            <li>Oeuvres</li>
        </ul>
    </nav>

   <div class="oeuvres">

      <h1>Les oeuvres de l'<span class="font-2">exposition</span></h1>
      <div class="parent">
         <div class="kids">
            <div class="babies one">
               <div class="img">
                  <img src='../img/o-1.png' alt=''>
               </div>
            </div>
            <div class="babies two">
               <img src='../img/o-2.png' alt=''>
            </div>
         </div>
         <div class="kids ">
            <div class="babies three">
               <img src='../img/o-3.png' alt=''>
            </div>
            <div class="babies four">
               <img src='../img/o-4.png' alt=''>
            </div>
         </div>
         <div class="kids">
            <div class="babies five">
               <img src='../img/o-5.png' alt=''>
            </div>
            <div class="babies six">
               <img src='../img/o-6.png' alt=''>
            </div>
         </div>
         <div class="kids">
            <div class="babies seven">
               <img src='../img/o-7.png' alt=''>
            </div>
            <div class="babies eight">
               <img src='../img/o-8.png' alt=''>
            </div>
         </div>
      </div>

   </div>
   <!-- <section class='loader'>
        <main class='loader_img'>
            <img src='../public/img/test.jpg' alt=''>
        </main>
        <side class="loader_title">
            <h1>collection</h1>
        </side>
    </section> -->

   <?php require '../views/footer.php'; ?>


</body>

</html>