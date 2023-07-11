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

    public function getByIdUtilisateur($idUtilisateur){
        $table_name = 'HistoriqueAchatRegime';

        $query = "SELECT * FROM ".$table_name."WHERE idUtilisateur =  %i";
        $query = sprintf($query, $this->db->escape($idUtilisateur));

        $resultat = $this->db->query($query);
        $results = array();        

        if($resultat != null){
            foreach ($resultat->result_array() as $data) {
                array_push($results,$data);
            }
        }
        else{
            throw new Exception("Aucun historique pour cet utilisateur");
        }
        return $results;
    }

    public function getDepenseTotal($idUtilisateur){
        $data = $this->getByIdUtilisateur($idUtilisateur);
        $depense = 0;
        if (!empty($data)) {
            foreach ($data as $row) {
                $depense = $depense + $row['montant'];
            }
        }
        return 0;
    }
    
    public function ajouterHistorique($regime, $prix) {
        date_default_timezone_set("Asia/Kuwait");
        
        $id_user = $_SESSION['current_user']->getIdUtilisateur();
        
        $data = array(
            'idRegime' => $regime,
            'idUtilisateur' => $id_user,
            'montant' => $prix,
            'dateAchat' => date("Y-m-d")
        );
        
        $this->db->insert('HistoriqueAchatRegime', $data);
    }
}

?>
