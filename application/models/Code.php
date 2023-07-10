<?php
 class Code extends CI_Model
 {
     private $code;
     private $valeurCode;
     private $etat;
     
     public function setCode($code)
     {
         $this->code = $code;
     }
     
     public function getCode()
     {
         return $this->code;
     }
     
     public function setValeurCode($valeurCode)
     {
         $this->valeurCode = $valeurCode;
     }
     
     public function getValeurCode()
     {
         return $this->valeurCode;
     }
     
     public function setEtat($etat)
     {
         $this->etat = $etat;
     }
     
     public function getEtat()
     {
         return $this->etat;
     }
 }
 
?>
