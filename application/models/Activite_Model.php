<?php
class Activite_Model extends CI_Model
{
    private $idActivite;
    private $designationActivite;
    private $description;
    
    public function setIdActivite($idActivite)
    {
        $this->idActivite = $idActivite;
    }
    
    public function getIdActivite()
    {
        return $this->idActivite;
    }
    
    public function setDesignationActivite($designationActivite)
    {
        $this->designationActivite = $designationActivite;
    }
    
    public function getDesignationActivite()
    {
        return $this->designationActivite;
    }
    
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
}

?>