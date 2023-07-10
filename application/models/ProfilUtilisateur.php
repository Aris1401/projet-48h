<?php
class ProfilUtilisateur extends CI_Model
{
    private $idProfilUtilisateur;
    private $idUtilisateur;
    private $poids;
    private $taille;
    private $dateDeNaissance;
    private $idGenre;
    
    public function setIdProfilUtilisateur($idProfilUtilisateur)
    {
        $this->idProfilUtilisateur = $idProfilUtilisateur;
    }
    
    public function getIdProfilUtilisateur()
    {
        return $this->idProfilUtilisateur;
    }
    
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;
    }
    
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }
    
    public function setPoids($poids)
    {
        $this->poids = $poids;
    }
    
    public function getPoids()
    {
        return $this->poids;
    }
    
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }
    
    public function getTaille()
    {
        return $this->taille;
    }
    
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;
    }
    
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }
    
    public function setIdGenre($idGenre)
    {
        $this->idGenre = $idGenre;
    }
    
    public function getIdGenre()
    {
        return $this->idGenre;
    }
}

?>