<?php
class HistoriqueAchatRegime_Model extends CI_Model
{
    private $idHistorique;
    private $idUtilisateur;
    private $idRegime;
    private $montant;
    private $dateAchat;
    
    public function setIdHistorique($idHistorique)
    {
        $this->idHistorique = $idHistorique;
    }
    
    public function getIdHistorique()
    {
        return $this->idHistorique;
    }
    
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;
    }
    
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }
    
    public function setIdRegime($idRegime)
    {
        $this->idRegime = $idRegime;
    }
    
    public function getIdRegime()
    {
        return $this->idRegime;
    }
    
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }
    
    public function getMontant()
    {
        return $this->montant;
    }
    
    public function setDateAchat($dateAchat)
    {
        $this->dateAchat = $dateAchat;
    }
    
    public function getDateAchat()
    {
        return $this->dateAchat;
    }
}

?>
