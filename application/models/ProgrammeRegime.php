<?php
 class ProgrammeRegime extends CI_Model
 {
     private $idProgrammeRegime;
     private $jour;
     private $idRegime;
     private $idPlat;
     private $idActiviteSport;
     
     public function setIdProgrammeRegime($idProgrammeRegime)
     {
         $this->idProgrammeRegime = $idProgrammeRegime;
     }
     
     public function getIdProgrammeRegime()
     {
         return $this->idProgrammeRegime;
     }
     
     public function setJour($jour)
     {
         $this->jour = $jour;
     }
     
     public function getJour()
     {
         return $this->jour;
     }
     
     public function setIdRegime($idRegime)
     {
         $this->idRegime = $idRegime;
     }
     
     public function getIdRegime()
     {
         return $this->idRegime;
     }
     
     public function setIdPlat($idPlat)
     {
         $this->idPlat = $idPlat;
     }
     
     public function getIdPlat()
     {
         return $this->idPlat;
     }
     
     public function setIdActiviteSport($idActiviteSport)
     {
         $this->idActiviteSport = $idActiviteSport;
     }
     
     public function getIdActiviteSport()
     {
         return $this->idActiviteSport;
     }
 }
 
?>
