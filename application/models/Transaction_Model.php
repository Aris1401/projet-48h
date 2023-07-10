<?php
 class Transaction_Model extends CI_Model
 {
     private $idTransaction;
     private $dateTransaction;
     private $sortie;
     private $entre;
     private $idUtilisateur;
     
     public function setIdTransaction($idTransaction)
     {
         $this->idTransaction = $idTransaction;
     }
     
     public function getIdTransaction()
     {
         return $this->idTransaction;
     }
     
     public function setDateTransaction($dateTransaction)
     {
         $this->dateTransaction = $dateTransaction;
     }
     
     public function getDateTransaction()
     {
         return $this->dateTransaction;
     }
     
     public function setSortie($sortie)
     {
         $this->sortie = $sortie;
     }
     
     public function getSortie()
     {
         return $this->sortie;
     }
     
     public function setEntre($entre)
     {
         $this->entre = $entre;
     }
     
     public function getEntre()
     {
         return $this->entre;
     }
     
     public function setIdUtilisateur($idUtilisateur)
     {
         $this->idUtilisateur = $idUtilisateur;
     }
     
     public function getIdUtilisateur()
     {
         return $this->idUtilisateur;
     }

     public function ajouter($sortie,$entree,$idUtilisateur)
    {
        $data = array(
            'dateTransaction' => date('Y-m-d'),
            'sortie' => $sortie,
            'entre' => $entree,
            'idUtilisateur' => $idUtilisateur
        );

        $this->db->insert('Transaction', $data);
    }

    public function getTransactionByIdUtilisateur($idUtilisateur){
    
        $table_name = 'Transaction';

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
            throw new Exception("Code validé par l'utilisateur sélectionné inexistant");
        }
        return $results;
    }
 }
 
?>
