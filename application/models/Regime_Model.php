<?php
class Regime_Model extends CI_Model
{
    private $idRegime;
    private $designationRegime;
    private $description;
    private $image;
    private $duree;
    private $variationPoids;
    private $prixRegime;
    

    
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

    public function setPrixRegime($prixRegime){
        $this->prixRegime = $prixRegime;
    }

    public function getPrixRegime(){
        return $this->prixRegime;
    }
    public function setPrixRegime($prixRegime)
    {
        $this->prixRegime = $prixRegime;
    }
    
    public function getPrixRegime()
    {
        return $this->prixRegime;
    }
 //////////////////////////////////////   
    public function AllRegime() {
        $query = $this->db->get('Regime');
        
        $regime = array();
        
        foreach ($query->result() as $row) {
            array_push($regime, $row);
        }
        
        return $regime;
    }
///////////////////////////////////////    
    public function getRegimeFromPoids($variance) {
        $this->load->model('Utilisateur_Model', 'Utilisateur');
        
        // Obtenir objectif de utilisateur
        session_start();
        $current_utilisateur = $_SESSION['current_user'];
        $query = ($this->db->get_where('Utilisateur', array('idUtilisateur' => $current_utilisateur->getIdUtilisateur())));
        
        $user_from_db = $current_utilisateur;
        foreach ($query->result() as $row) {
            $user_from_db = ($row);
        }
        
        // Selectionner regimes par rapport a l'objectif
        $query = null;
        if ($user_from_db->idTypeObjectif == 1) {
            $query = $this->db->where('variationPoids >= ', 0)->get('Regime');
        } else if ($user_from_db->idTypeObjectif == 0) {
            $query = $this->db->where('variationPoids < ', 0)->get('Regime');
        }
        
        // Regimes
        $regimes = array();
        foreach($query->result() as $row) {
            array_push($regimes, $row);
        }
        
        // Obtenir les meilleurs regimes
        foreach($regimes as $regime) {
            $duree_temp = $regime->variationPoids == 0 ? 0 : ($variance * $regime->duree) / $regime->variationPoids;
            $prix_temp = $regime->duree == 0 ? 0 : ($duree_temp * $regime->prixRegime) / $regime->duree;
            
            $rapport_regime = $prix_temp == 0 ? 0 : $duree_temp / $prix_temp;
            
            $regime->rapport = $rapport_regime;
            $regime->prix = $prix_temp;
            $regime->duree_reel = $duree_temp;
        }
        
        // Sort regimes by rapport
        for ($i = 0; $i < count($regimes); $i++) {
            for ($j = $i + 1; $j < count($regimes); $j++) {
                if ($this->calculerRapport($regimes[$i], $user_from_db) < $this->calculerRapport($regimes[$j], $user_from_db)) {
                    $temp = $regimes[$i];
                    $regimes[$i] = $regimes[$j];
                    $regimes[$j] = $temp;
                }
            }
        }
        
        return $regimes;
    }
 //////////////////////////////////////   
    function calculerRapport($regime, $user) {
        $rapport = $regime->rapport;
        
        $rapport_calculer = $rapport;
        
        return $rapport_calculer;
    }

//////////////////////////////Insert Regime
public function doRegister($designationRegime, $description, $image, $duree, $variationPoids,$prixRegime)
{
    $query = "INSERT INTO Regime (designationRegime, description, image, duree, variationPoids ,prixRegime) VALUES (%s, %s, %s, %s, %s, %s)";
    $query = sprintf($query, $this->db->escape($designationRegime),
     $this->db->escape($description), $this->db->escape($image), $this->db->escape($duree)
     ,$this->db->escape($variationPoids),$this->db->escape($prixRegime));
         
    $this->db->query($query);

    return $this->db->insert_id();
}
///////////////////////////////Delete Regime
public function doDelete($idRegime)
{
    $query = "DELETE FROM Regime WHERE idRegime = %s";
    $query = sprintf($query, $this->db->escape($idRegime));
         
    $this->db->query($query);

    return $this->db->insert_id();
}
////////////////////////////////Update Regime
public function doUpdate($idRegime, $designationRegime, $description, $image, $duree,$variationPoids)
{
    $query = "UPDATE Regime SET designationRegime = %s, description = %s, image = %s, duree = %s , variationPoids = %s WHERE idRegime = %s";
    $query = sprintf($query, $this->db->escape($designationRegime), $this->db->escape($description),
     $this->db->escape($image), $this->db->escape($duree), $this->db->escape($variationPoids)
    ,$this->db->escape($idRegime));
         
    $this->db->query($query);

    return $this->db->affected_rows();
}
//////////////////////////////////Select all
public function getAllActivite() {
    $query = "SELECT * FROM Regime";

    $resultat = $this->db->query($query);

    $currentObjects = array();

    foreach($resultat->result_array() as $data) {
        array_push($currentObjects, $data);
    }

    return $currentObjects;
}


}
?>
