<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/settings.css">
    <link rel="stylesheet" href="../public/styles/style.css">
    <link rel="stylesheet" href="../public/styles/login.css">

    <title>Login</title>
</head>
<body>

<div class="container" data-aos='fade-in'      data-aos-delay='700'      data-aos-duration='700'>
        <div class="card">
        <div class="image_form_login">
    <img src="../public/img/test.jpg" alt="">
  </div>
        <div class="form">
        <h2>Login</h2>
          <form method='POST' action='index.php?action=traiteconnexion'>
           <div>
           <label for="">Username</label>
            <input type="text" id="username" name='l' placeholder="Enter your username">
      
            <label for="">Password</label>
            <input type="password" id="" name='mdp_connexion' placeholder="Enter your password">
           </div>
      
            <button type="submit">Login</button>
        </div>
          </form>
        



</body>
</html>