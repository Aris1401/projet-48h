<?php
 class ActiviteSport_Model extends CI_Model
 {
     private $idActiviteSport;
     private $idActivite;
     private $idSport;
     private $duree;
     private $nombre;
     private $variationPoids;
     
     public function setIdActiviteSport($idActiviteSport)
     {
         $this->idActiviteSport = $idActiviteSport;
     }
     
     public function getIdActiviteSport()
     {
         return $this->idActiviteSport;
     }
     
     public function setIdActivite($idActivite)
     {
         $this->idActivite = $idActivite;
     }
     
     public function getIdActivite()
     {
         return $this->idActivite;
     }
     
     public function setIdSport($idSport)
     {
         $this->idSport = $idSport;
     }
     
     public function getIdSport()
     {
         return $this->idSport;
     }
     
     public function setDuree($duree)
     {
         $this->duree = $duree;
     }
     
     public function getDuree()
     {
         return $this->duree;
     }
     
     public function setNombre($nombre)
     {
         $this->nombre = $nombre;
     }
     
     public function getNombre()
     {
         return $this->nombre;
     }
     
     public function setVariationPoids($variationPoids)
     {
         $this->variationPoids = $variationPoids;
     }
     
     public function getVariationPoids()
     {
         return $this->variationPoids;
     }
 }
 
?>
