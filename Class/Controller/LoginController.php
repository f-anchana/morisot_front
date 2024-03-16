<?php

namespace App\Controller;

class LoginController {
    private $router;
    public function __construct($router)
    {
        $this->router = $router;
    }

    public function displayInscription() {
        echo "<!DOCTYPE html>
        <html lang='fr'>";
        require '../views/head.php';
        echo "<body>";
        require '../views/inscription.php';
        echo "</body>
        </html>";
    }

    public function createUser(){
        if (isset($_POST["submit"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["passwordRepeat"];
            $username = $_POST["username"];
            $user = new User();
            $user->createUser($email, $password, $passwordRepeat, $username);
        }
    }

    public function SignUp(){
        if (isset($_POST["submit"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["passwordRepeat"];
            $username = $_POST["username"];
            $user = new User();
            $user->createUser($email, $password, $passwordRepeat, $username);
        }
    }
}