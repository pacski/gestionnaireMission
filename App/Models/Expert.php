<?php


namespace App\Models;


use mysql_xdevapi\Table;

class Expert extends Collaborateur
{
    private $id;
    private $anneeExperience;
    private $departement;
    private $isResponsable = false;
    private $langue;


    function envoieRapport($rapport){

    }

    function rechercheExpert(){

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getAnneeExperience()
    {
        return $this->anneeExperience;
    }

    /**
     * @param int $anneeExperience
     */
    public function setAnneeExperience($anneeExperience)
    {
        $this->anneeExperience = $anneeExperience;
    }

    /**
     * @return string
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * @param string $departement
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;
    }

    /**
     * @return boolean
     */
    public function getIsResponsable()
    {
        return $this->isResponsable;
    }

    /**
     * @param boolean $isResponsable
     */
    public function setIsResponsable($isResponsable)
    {
        $this->isResponsable = $isResponsable;
    }

    /**
     * @return mixed
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * @param mixed $langue
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;
    }


}