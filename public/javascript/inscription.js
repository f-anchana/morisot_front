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