<?php
class TypeAbonnement_Model extends CI_Model
{
    private $idTypePourcentage;
    private $designationTypeAbonnement;
    private $prix;
    private $reduction;

    public function getIdTypePourcentage()
    {
        return $this->idTypePourcentage;
    }

    public function setIdTypePourcentage($idTypePourcentage)
    {
        $this->idTypePourcentage = $idTypePourcentage;
    }

    public function getDesignationTypeAbonnement()
    {
        return $this->designationTypeAbonnement;
    }

    public function setDesignationTypeAbonnement($designationTypeAbonnement)
    {
        $this->designationTypeAbonnement = $designationTypeAbonnement;
    }
    
    public function getTypeAbonnement($idTypeAbonnement) {
        $query = $this->db->where('idTypeAbonnement = ', $idTypeAbonnement)->get('TypeAbonnement');
        return $query->row();
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
