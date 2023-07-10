<?php
class ProfilUtilisateur_Model extends CI_Model
{
    private $idProfilUtilisateur;
    private $idUtilisateur;
    private $poids;
    private $taille;
    private $dateDeNaissance;
    private $idGenre;
    private $poidObjectif;
    
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
////////////////////////////////////INSERT PROFIL UTILISATEUR/////////////////////////////////////////////////////////
public function doRegister($idProfilUtilisateur, $idUtilisateur, $poids, $taille, $dateDeNaissance, $idGenre)
{
    $query = "INSERT INTO Utilisateur (nom, prenom, email, motDePasse, idTypeObjectif, estAdmin) VALUES (%s, %s, %s, %s, %s, %s)";
    $query = sprintf($query, $this->db->escape($idProfilUtilisateur), $this->db->escape($idUtilisateur),
     $this->db->escape($poids), $this->db->escape($taille), $this->db->escape($dateDeNaissance),
      $this->db->escape($idGenre));
         
    $this->db->query($query);

    return $this->db->insert_id();
}
//////////////////////////////////////////////MODIFIER PROFIL//////////////////////////////////////////////////////////////////////////
public function doUpdate($idUtilisateur, $poids, $taille, $dateDeNaissance, $idGenre)
{
    $query = "UPDATE Utilisateur SET poids = %s, taille = %s, dateDeNaissance = %s, idGenre = %s WHERE idUtilisateur = %s";
    $query = sprintf($query, $this->db->escape($poids), $this->db->escape($taille),
     $this->db->escape($dateDeNaissance), $this->db->escape($idGenre), $this->db->escape($idUtilisateur));
         
    $this->db->query($query);

    return $this->db->affected_rows();
}

}

?>