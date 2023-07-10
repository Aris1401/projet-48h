
<?php
class Utilisateur_Model extends CI_Model
{
    private $idUtilisateur;
    private $nom;
    private $prenom;
    private $email;
    private $motDePasse;
    private $idTypeObjectif;
    private $estAdmin;
    
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;
    }
    
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    
    public function getNom()
    {
        return $this->nom;
    }
    
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    
    public function getPrenom()
    {
        return $this->prenom;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;
    }
    
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }
    
    public function setIdTypeObjectif($idTypeObjectif)
    {
        $this->idTypeObjectif = $idTypeObjectif;
    }
    
    public function getIdTypeObjectif()
    {
        return $this->idTypeObjectif;
    }
    
    public function setEstAdmin($estAdmin)
    {
        $this->estAdmin = $estAdmin;
    }
    
    public function getEstAdmin()
    {
        return $this->estAdmin;
    }
/////////////////////////////////////////LOGIN///////////////////////////////////////////////////////////////
    public function doLogin($username, $password) {
        $users_Table = "Utilisateur";

        $query = "SELECT * FROM ".$users_Table." WHERE email = %s and motDePasse = %s";
        $query = sprintf($query, $this->db->escape($username), $this->db->escape($password));

        $resultat = $this->db->query($query);
        $ligne_resultat = $resultat->row_array();

        return $ligne_resultat;
    }
/////////////////////////////////////////////INSCRIPTION///////////////////////////////////////////////////////////
public function doRegister($user) {
    $query = "INSERT INTO Utilisateur (nom, prenom,email,motDePasse,idTypeObjectif,estAdmin) VALUES (%s, %s, %s, %s, %s, %s)";
        $query = sprintf($query, $this->db->escape($user->getNom()), $this->db->escape($user->getPrenom())
        ,$this->db->escape($user->getEmail()),$this->db->escape($user->getMotDePasse())
        ,$this->db->escape($user->getIdTypeObjectif()), $this->db->escape($user->getEstAdmin()));
        $this->db->query($query);

        return $this->db->insert_id();
}

/////////////////////////////////////////////GET BY ID///////////////////////////////////////////////////////////
    public function getUtilisateurById($id) {
        $users_Table = "Utilisateur";

        $query = "SELECT * FROM ".$users_Table." WHERE idUtilisateur = %d";
        $query = sprintf($query, $this->db->escape($id));

        $resultat = $this->db->query($query);
        $ligne_resultat = $resultat->row_array();

        if ($ligne_resultat == null) return null;

        $utilisateur = new Utilisateur_Model();
        $utilisateur->setIdUtilisateur($id);
        $utilisateur->setNom($ligne_resultat['nom']);
        $utilisateur->setPrenom($ligne_resultat['prenom']);
        $utilisateur->setMotDePasse($ligne_resultat['motDePasse']);
        $utilisateur->setIdTypeObjectif($ligne_resultat['idTypeObjectif']);
        $utilisateur->setEstAdmin($ligne_resultat['estAdmin']);
        return $utilisateur;
    }
//////////////////////////////////////////////MODIFIER UTILISATEUR//////////////////////////////////////////////////////////////////////////
public function doUpdate($idUtilisateur, $nom, $prenom, $motDePasse, $idTypeObjectif, $estAdmin)
{
    $query = "UPDATE Utilisateur SET nom = %s, prenom = %s, motDePasse = %s, idTypeObjectif = %s, estAdmin = %s WHERE idUtilisateur = %s";
    $query = sprintf($query, $this->db->escape($nom), $this->db->escape($prenom), $this->db->escape($motDePasse),
        $this->db->escape($idTypeObjectif), $this->db->escape($estAdmin), $this->db->escape($idUtilisateur));

    $this->db->query($query);

    return $this->db->affected_rows();
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}

?>