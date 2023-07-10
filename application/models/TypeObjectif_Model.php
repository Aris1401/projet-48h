<?php
class TypeObjectif_Model extends CI_Model
{
    private $idTypeObjectif;
    private $designationObjectif;

    public function getIdTypeObjectif() {
        return $this->idTypeObjectif;
    }

    public function setIdTypeObjectif  ($idTypeObjectif) {
        $this->idTypeObjectif   = $idTypeObjectif ;
    }
/////////////////////////////////AllObjectif////////////////////////////////////////
public function getAllTypeObjectif() {
    $query = "SELECT * FROM TypeObjectif";

    $resultat = $this->db->query($query);

    $currentObjects = array();

    foreach($resultat->result_array() as $data) {
        array_push($currentObjects, $data);
    }

    return $currentObjects;
}
/////////////////////////////////////////////////////////////////////////
}
?>