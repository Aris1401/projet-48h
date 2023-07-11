<?php
class TypePourcentage_Model extends CI_Model
{
    private $idTypePourcentage;
    private $designation;

    public function getIdTypePourcentage() {
        return $this->idTypePourcentage;
    }

    public function setIdTypePourcentage  ($idTypePourcentage) {
        $this->idTypePourcentage   = $$idTypePourcentage;
    }

    public function getDesignation(){
        return $this->designation;
    }

    public function setDesignation($designation){
        $this->designation = $designation;
    }
}
?>