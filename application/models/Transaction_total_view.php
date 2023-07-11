<?php
class Transaction_total_View extends CI_Model
{
    private $idTransaction;
    private $dateTransaction;
    private $totalEntre;
    private $totalSortie;
    private $transactionTotal;
    
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
    
    public function setTotalEntre($totalEntre)
    {
        $this->totalEntre = $totalEntre;
    }
    
    public function getTotalEntre()
    {
        return $this->totalEntre;
    }
    
    public function setTotalSortie($totalSortie)
    {
        $this->totalSortie = $totalSortie;
    }
    
    public function getTotalSortie()
    {
        return $this->totalSortie;
    }
    
    public function setTransactionTotal($transactionTotal)
    {
        $this->transactionTotal = $transactionTotal;
    }
    
    public function getTransactionTotal()
    {
        return $this->transactionTotal;
    }

    public function getTotal($id) {
        $users_Table = "Utilisateur";

        $query = "SELECT * FROM ".$users_Table." WHERE idUtilisateur = %d";
        $query = sprintf($query, $this->db->escape($id));

        $resultat = $this->db->query($query);
        $ligne_resultat = $resultat->row_array();

        if ($ligne_resultat == null) return null;

        $utilisateur = new Transaction_total_View();
        $utilisateur->setIdUtilisateur($id);
        $utilisateur->setIdTransaction($ligne_resultat['idTransaction']);
        $utilisateur->setDateTransaction($ligne_resultat['dateTransaction']);
        $utilisateur->setTotalEntre($ligne_resultat['totalEntre']);
        $utilisateur->setTotalSortie($ligne_resultat['totalSortie']);
        $utilisateur->setTransactionTotal($ligne_resultat['transactionTotal']);
        return $utilisateur;
 
}
}
?>
