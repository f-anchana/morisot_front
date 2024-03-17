<?php

class UserManager{
    private $db;

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function setDb(PDO $db)
    {
        $this->db = $db;
    }

    public function createUser($email, $password, $passwordRepeat, $username){
        if ($password == $passwordRepeat) {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $req = $this->db->prepare('INSERT INTO user(email, password, username) VALUES(:email, :password, :username)');
            $req->execute(array(
                'email' => $email,
                'password' => $password,
                'username' => $username
            ));
        }
    }
}