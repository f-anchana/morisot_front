<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription chef</title>

</head>
<body>

<div class="formulaire">
<form id="mon-formulaire" action="../API/controller.php" method='POST' onsubmit="return validateForm();">
<?php 
if(isset($erreur)){
    echo $erreur;
}
?>

<h1>Pour t'inscrire</h1> <br><br>   

    <label for="nom_user">Votre nom</label>
    <input type="text" name="nom_user" id="nom_user" required="required">

    <label for="prenom_user">Votre prénom</label>
    <input type="text" name="prenom_user" id="prenom_user" required="required">4

    <label for="numero">Votre numéro de téléphone</label>
    <input type="text" name="numero" id="numero" required="required">

    <label for='email'>Entrez votre email</label>
    <input type='email' name='email' id='email' required='required'>

    <label for="age">Age</label>
    <input type="number" name="age" id="age" required="required" min="1">

    <label for='mdp1'>Définissez un mot de passe</label>
    <input type='password' name='mdp1' id='mdp1' required='required'>

    <label for='mdp2'>Vérifier votre mot de passe</label>
    <input type='password' name='mdp2' id='mdp2' required='required'>
    <p id="error-message" style="color: red;"></p>


    <input type='submit' value='Valider' id='submit' name='soumettre'>

</form>

<p>Vous possédez déjà un compte ? <a href="index.php?action=login" class="connectez"> connectez-vous</a></p>

</div>
</div>

<script>
    // Fonction JS qui vérifie que les mots de passes sont les mêmes
function validateForm() {
    var password1 = document.getElementById('mdp1').value;
    var password2 = document.getElementById('mdp2').value;

    if (password1 !== password2) {
        document.getElementById('error-message').textContent = "Les mots de passe ne correspondent pas. Veuillez réessayez";
        return false; // Empêche la soumission du formulaire
    }
    return true; // Permet la soumission du formulaire
}

document.getElementById('mon-formulaire').addEventListener('submit', function(event) {
        event.preventDefault(); // Empêche l'envoi traditionnel du formulaire
        
        var formData = {
            nom_user: document.getElementById('nom_user').value,
            prenom_user: document.getElementById('prenom_user').value,
            numero: document.getElementById('numero').value,
            email: document.getElementById('email').value,
            age: document.getElementById('age').value,
            mdp1: document.getElementById('mdp1').value,
            mdp2: document.getElementById('mdp2').value
        };

        var jsonData = JSON.stringify(formData);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../API/controller.php', true);
        xhr.setRequestHeader('Content-type', 'application/json; charset=utf-8');
        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 300) {
                console.log(xhr.responseText);
            } else {
                console.error(xhr.statusText);
            }
        };
        xhr.onerror = function() {
            console.error('Erreur de réseau');
        };
        xhr.send(jsonData);
    });
</script>
</body>
</html>


</body>
</html>