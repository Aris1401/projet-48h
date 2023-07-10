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
public function doRegister($idUtilisateur, $poids, $taille, $dateDeNaissance, $idGenre)
{
    $query = "INSERT INTO ProfilUtilisateur (idUtilisateur, poids, taille, dateDeNaissance, idGenre) VALUES ( %s, %s, %s, %s, %s)";
    $query = sprintf($query, $this->db->escape($idUtilisateur), $this->db->escape($poids),
     $this->db->escape($taille), $this->db->escape($dateDeNaissance), $this->db->escape($idGenre));
         
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
/////////////////////////////////////////////////////////////////////
public function getProfilUtilisateurById($id) {
    $users_Table = "Utilisateur";

    $query = "SELECT * FROM ".$users_Table." WHERE ProfilUtilisateur = %d";
    $query = sprintf($query, $this->db->escape($id));

    $resultat = $this->db->query($query);
    $ligne_resultat = $resultat->row_array();

    if ($ligne_resultat == null) return null;

    $utilisateur = new ProfilUtilisateur_Model();
    $utilisateur->setIdProfilUtilisateur($ligne_resultat['idProfilUtilisateur']);
    $utilisateur->setIdUtilisateur($ligne_resultat['idUtilisateur']);
    $utilisateur->setPoids($ligne_resultat['poids']);
    $utilisateur->setTaille($ligne_resultat['taille']);
    $utilisateur->setDateDeNaissance($ligne_resultat['dateDeNaissance']);
    $utilisateur->setIdGenre($ligne_resultat['idGenre']);
    return $utilisateur;

}

}

?>