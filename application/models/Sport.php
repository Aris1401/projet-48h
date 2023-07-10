<?php
class Sport extends CI_Model
{
    private $idSport;
    private $designationSport;
    private $description;
    
    public function setIdSport($idSport)
    {
        $this->idSport = $idSport;
    }
    
    public function getIdSport()
    {
        return $this->idSport;
    }
    
    public function setDesignationSport($designationSport)
    {
        $this->designationSport = $designationSport;
    }
    
    public function getDesignationSport()
    {
        return $this->designationSport;
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
