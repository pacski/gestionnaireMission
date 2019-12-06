<?php

namespace App\Models;



/**
 * Example user model
 *
 * PHP version 7.0
 */
class Collaborateur extends \Core\Model
{

    private $nom;
    private $prenom;
    private $fonction;
    private $mail;
    private $tel;
    private $salaire;


    function __construct()
    {

    }

/**
 * @return string
 */public function getNom()
{
    return $this->nom;
}
/**
 * @param string $nom
 */public function setNom($nom)
{
    $this->nom = $nom;
}
/**
 * @return string
 */public function getPrenom()
{
    return $this->prenom;
}
/**
 * @param string $prenom
 */public function setPrenom($prenom)
{
    $this->prenom = $prenom;
}
/**
 * @return string
 */public function getFonction()
{
    return $this->fonction;
}
/**
 * @param string $fonction
 */public function setFonction($fonction)
{
    $this->fonction = $fonction;
}
/**
 * @return string
 */public function getMail()
{
    return $this->mail;
}
/**
 * @param string $mail
 */public function setMail($mail)
{
    $this->mail = $mail;
}
/**
 * @return int
 */public function getTel()
{
    return $this->tel;
}
/**
 * @param int $tel
 */public function setTel($tel)
{
    $this->tel = $tel;
}
/**
 * @return int
 */public function getSalaire()
{
    return $this->salaire;
}
/**
 * @param int $salaire
 */public function setSalaire($salaire)
{
    $this->salaire = $salaire;
}



}
