<?php
class Regime_Model extends CI_Model
{
    private $idRegime;
    private $designationRegime;
    private $description;
    private $image;
    private $duree;
    private $variationPoids;
    
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
    
    function calculerRapport($regime, $user) {
        $rapport = $regime->rapport;
        
        $rapport_calculer = $rapport;
        
        return $rapport_calculer;
    }
}

?>
