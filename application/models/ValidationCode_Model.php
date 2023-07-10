<?php
class ValidationCode_Model extends CI_Model
{
    private $idCode;
    private $idPersonne;
    private $dateValidation;
    
    public function setIdCode($idCode)
    {
        $this->idCode = $idCode;
    }
    
    public function getIdCode()
    {
        return $this->idCode;
    }
    
    public function setIdPersonne($idPersonne)
    {
        $this->idPersonne = $idPersonne;
    }
    
    public function getIdPersonne()
    {
        return $this->idPersonne;
    }
    
    public function setDateValidation($dateValidation)
    {
        $this->dateValidation = $dateValidation;
    }
    
    public function getDateValidation()
    {
        return $this->dateValidation;
    }
}

?>
