<?php
 class Transaction extends CI_Model
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
 }
 
?>
