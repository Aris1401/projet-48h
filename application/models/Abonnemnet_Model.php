<?
class Abonnement_Model extends CI_Model
{
    private $idAbonnement;
    private $designation;
    private $prix;
    private $reduction;
    
    public function getIdAbonnement()
    {
        return $this->idAbonnement;
    }
    
    public function setIdAbonnement($idAbonnement)
    {
        $this->idAbonnement = $idAbonnement;
    }
    
    public function getDesignation()
    {
        return $this->designation;
    }
    
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }
    
    public function getPrix()
    {
        return $this->prix;
    }
    
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
    
    public function getReduction()
    {
        return $this->reduction;
    }
    
    public function setReduction($reduction)
    {
        $this->reduction = $reduction;
    }
}
?>