<?php
class TypeObjectif extends CI_Model
{
    private $idTypeObjectif;
    private $designationObjectif;

    public function getIdTypeObjectif() {
        return $this->idTypeObjectif;
    }

    public function setIdTypeObjectif  ($idTypeObjectif) {
        $this->idTypeObjectif   = $idTypeObjectif ;
    }
}
?>