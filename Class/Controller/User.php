<?php

class User
{

    protected $id_user;
    protected $nom;
    protected $prenom;
    protected $numero;
    protected $age;
    protected $mail;

    public function getId_user()
    {
        return $this->id_user;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getMail()
    {
        return $this->mail;
    }

    private function hydrate($donnees) //array va forcer à le convertir en tableau
    {
       foreach ($donnees as $key => $value){
        $method = 'set'.ucfirst($key);
        if (method_exists($this, $method)){
            $this->$method($value);
        }
       }
    }

    public function __construct($donnees)
    {
      $this->hydrate($donnees);
    }


}