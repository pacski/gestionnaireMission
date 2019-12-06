<?php


namespace App\Models;


class ExpertExterne
{

    private $id;
    private $entreprise;
    private $anneeExperience;
    private $langue;


    function envoieRapport($rapport){

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
     * @return mixed
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * @param mixed $entreprise
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;
    }

    /**
     * @return mixed
     */
    public function getAnneeExperience()
    {
        return $this->anneeExperience;
    }

    /**
     * @param mixed $anneeExperience
     */
    public function setAnneeExperience($anneeExperience)
    {
        $this->anneeExperience = $anneeExperience;
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