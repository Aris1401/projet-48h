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

//////////////////////////////Insert ActiviteSport
public function doRegister($idActivite, $idSport, $duree, $nombre, $variationPoids)
{
    $query = "INSERT INTO ActiviteSport (idActivite, idSport, duree, nombre, variationPoids) VALUES (%s, %s, %s, %s, %s)";
    $query = sprintf($query, $this->db->escape($idActivite),
     $this->db->escape($idSport), $this->db->escape($duree), $this->db->escape($nombre)
     ,$this->db->escape($variationPoids));
         
    $this->db->query($query);

    return $this->db->insert_id();
}
///////////////////////////////Delete ActiviteSport
public function doDelete($idActiviteSport)
{
    $query = "DELETE FROM ActiviteSport WHERE idActiviteSport = %s";
    $query = sprintf($query, $this->db->escape($idActiviteSport));
         
    $this->db->query($query);

    return $this->db->insert_id();
}
////////////////////////////////Update ActiviteSport
public function doUpdate($idActiviteSport ,$idActivite, $idSport, $duree, $nombre, $variationPoids)
{
    $query = "UPDATE ActiviteSport SET idActivite = %s, idSport = %s, duree = %s, nombre = %s , variationPoids = %s WHERE idActiviteSport = %s";
    $query = sprintf($query, $this->db->escape($idActivite), $this->db->escape($idSport),
     $this->db->escape($duree), $this->db->escape($nombre), $this->db->escape($variationPoids)
    ,$this->db->escape($idActiviteSport));
         
    $this->db->query($query);

    return $this->db->affected_rows();
}
//////////////////////////////////Select all
public function AllActivite() {
    $query = "SELECT * FROM ActiviteSport";

    $resultat = $this->db->query($query);

    $currentObjects = array();

    foreach($resultat->result() as $data) {
        array_push($currentObjects, $data);
    }

    return $currentObjects;
}  
///////////////////////////////////////////
public function getActiviteSportById($id) {
    $users_Table = "ActiviteSport";

    $query = "SELECT * FROM ".$users_Table." WHERE idActiviteSport = %s";
    $query = sprintf($query, $this->db->escape($id));

    $resultat = $this->db->query($query);
    $ligne_resultat = $resultat->row_array();

    if ($ligne_resultat == null) return null;

    $utilisateur = new ActiviteSport_Model();
    $utilisateur->setIdActiviteSport($ligne_resultat['idActiviteSport']);
    $utilisateur->setIdActivite($ligne_resultat['idActivite']);
    $utilisateur->setIdSport($ligne_resultat['idSport']);
    $utilisateur->setDuree($ligne_resultat['duree']);
    $utilisateur->setNombre($ligne_resultat['nombre']);
    $utilisateur->setVariationPoids($ligne_resultat['variationPoids']);
    return $utilisateur;   
 }

}
?>
