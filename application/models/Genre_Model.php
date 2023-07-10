<?php
 class Genre_Model extends CI_Model
 {
     private $idGenre;
     private $designationGenre;
 
     public function getIdGenre() {
         return $this->idGenre;
     }
 
     public function setDesignationGenre  ($designationGenre) {
         $this->designationGenre   = $designationGenre ;
     }
 }
?>