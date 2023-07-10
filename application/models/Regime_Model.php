<?php
class Regime_Model extends CI_Model
{
    private $idRegime;
    private $designationRegime;
    private $description;
    private $image;
    private $duree;
    private $variationPoids;
    
    public function setIdRegime($idRegime)
    {
        $this->idRegime = $idRegime;
    }
    
    public function getIdRegime()
    {
        return $this->idRegime;
    }
    
    public function setDesignationRegime($designationRegime)
    {
        $this->designationRegime = $designationRegime;
    }
    
    public function getDesignationRegime()
    {
        return $this->designationRegime;
    }
    
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setImage($image)
    {
        $this->image = $image;
    }
    
    public function getImage()
    {
        return $this->image;
    }
    
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }
    
    public function getDuree()
    {
        return $this->duree;
    }
    
    public function setVariationPoids($variationPoids)
    {
        $this->variationPoids = $variationPoids;
    }
    
    public function getVariationPoids()
    {
        return $this->variationPoids;
    }
}

?>
