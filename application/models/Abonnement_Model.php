<?php
class Abonnement_Model extends CI_Model
{
    private $idAbonnement;
    private $idUtilisateur;
    private $idTypeAbonnement;
    private $dateDebut;
    private $dateFin;

    public function getIdAbonnement()
    {
        return $this->idAbonnement;
    }

    public function setIdAbonnement($idAbonnement)
    {
        $this->idAbonnement = $idAbonnement;
    }

    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;
    }

    public function getIdTypeAbonnement()
    {
        return $this->idTypeAbonnement;
    }

    public function setIdTypeAbonnement($idTypeAbonnement)
    {
        $this->idTypeAbonnement = $idTypeAbonnement;
    }

    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }

    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }
    
    public function getAbonnementUser($idUser) {
        $query = $this->db->where(array('idUtilisateur = '=> $idUser, 'dateFin = ' => null))->get('Abonnement');
        
        $abonnement = null;
        $count = 0;
        
        $this->load->model('TypeAbonnement_Model', 'TypeAbonnement');
        foreach ($query->result() as $row) {
            $count++;
            
            $abonnement = $row;
            
            $abonnement->type = $this->TypeAbonnement->getTypeAbonnement($abonnement->idTypeAbonnement);
        }
        
        return $abonnement;
    }

    public function getAllAbonnement()
    {
        $query = $this->db->get('Abonnement');
        $resultats = $query->result();

        $abonnements = array();
        foreach ($resultats as $resultat) {
            $abonnement = new Abonnement_Model();
            $abonnement->setIdAbonnement($resultat->idAbonnement);
            $abonnement->setIdUtilisateur($resultat->idUtilisateur);
            $abonnement->setIdTypeAbonnement($resultat->idTypeAbonnement);
            $abonnement->setDateDebut($resultat->dateDebut);
            $abonnement->setDateFin($resultat->dateFin);
            array_push($abonnements,$abonnement);
        }

        return $abonnements;
    }
}
?>
