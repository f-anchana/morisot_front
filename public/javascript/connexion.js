    function togglePasswordVisibility() {
        var passwordField = document.getElementById("mdp");
        var showPasswordButton = document.getElementById("showPasswordButton");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            showPasswordButton.textContent = "Masquer le mot de passe";
        } else {
            passwordField.type = "password";
            showPasswordButton.textContent = "Afficher le mot de passe";
        }
    }
