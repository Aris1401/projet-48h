<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AbonnementJoinType_Model extends CI_Model {
    private $idAbonnement;
    private $idUtilisateur;
    private $idTypeAbonnement;
    private $dateDebut;
    private $dateFin;
    private $designation;
    private $prix;
    private $reduction;

    public function getIdAbonnement() {
        return $this->idAbonnement;
    }

    public function setIdAbonnement($idAbonnement) {
        $this->idAbonnement = $idAbonnement;
    }

    public function getIdUtilisateur() {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur($idUtilisateur) {
        $this->idUtilisateur = $idUtilisateur;
    }

    public function getIdTypeAbonnement() {
        return $this->idTypeAbonnement;
    }

    public function setIdTypeAbonnement($idTypeAbonnement) {
        $this->idTypeAbonnement = $idTypeAbonnement;
    }

    public function getDateDebut() {
        return $this->dateDebut;
    }

    public function setDateDebut($dateDebut) {
        $this->dateDebut = $dateDebut;
    }

    public function getDateFin() {
        return $this->dateFin;
    }

    public function setDateFin($dateFin) {
        $this->dateFin = $dateFin;
    }

    public function getDesignation() {
        return $this->designation;
    }

    public function setDesignation($designation) {
        $this->designation = $designation;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

    public function getReduction() {
        return $this->reduction;
    }

    public function setReduction($reduction) {
        $this->reduction = $reduction;
    }

    // Méthode pour récupérer la liste de tous les abonnements avec les détails du type d'abonnement
    public function getAllAbonnements() {
        $query = $this->db->select('Abonnement.idAbonnement, Abonnement.idUtilisateur, Abonnement.idTypeAbonnement, Abonnement.dateDebut, Abonnement.dateFin, TypeAbonnement.designation, TypeAbonnement.prix, TypeAbonnement.reduction')
                          ->from('Abonnement')
                          ->join('TypeAbonnement', 'Abonnement.idTypeAbonnement = TypeAbonnement.idTypeAbonnement')
                          ->get();

        $abonnements = array();
        foreach ($query->result() as $row) {
            $abonnement = new AbonnementJoinType_Model();
            $abonnement->setIdAbonnement($row->idAbonnement);
            $abonnement->setIdUtilisateur($row->idUtilisateur);
            $abonnement->setIdTypeAbonnement($row->idTypeAbonnement);
            $abonnement->setDateDebut($row->dateDebut);
            $abonnement->setDateFin($row->dateFin);
            $abonnement->setDesignation($row->designation);
            $abonnement->setPrix($row->prix);
            $abonnement->setReduction($row->reduction);

            array_push($abonnements,$abonnement);
        }

        return $abonnements;
    }
}
