<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/settings.css">
    <link rel="stylesheet" href="../public/styles/style.css">
    <link rel="stylesheet" href="../public/styles/login.css">

    <title>Document</title>
</head>
<body>

<div class="container" data-aos='fade-in'      data-aos-delay='700'      data-aos-duration='700'>
        <div class="card">
        <div class="image_form_login">
    <img src="../public/img/test.jpg" alt="">
  </div>
        <div class="form">
        <h2>Connexion</h2>
          <form method='POST' action='index.php?action=traiteconnexion'>
           <div>
           <label for="">identifiant</label>
            <input type="text" id="username" name='l' placeholder="Enter your username">
      
            <label for="">mot de passe</label>
            <input type="password" id="" name='mdp_connexion' placeholder="Enter your password">
           </div>
      
            <button type="submit">connexion</button>
        </div>
          </form>
        



</body>
</html>