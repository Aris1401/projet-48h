<?php
class RegimePourcentage_Model extends CI_Model
{
    private $idRegimePourcentage;
    private $idRegime;
    private $idTypePourcentage;
    private $pourcentage;

    public function getIdRegimePourcentage()
    {
        return $this->idRegimePourcentage;
    }

    public function setIdRegimePourcentage($idRegimePourcentage)
    {
        $this->idRegimePourcentage = $idRegimePourcentage;
    }

    public function getIdRegime()
    {
        return $this->idRegime;
    }

    public function setIdRegime($idRegime)
    {
        $this->idRegime = $idRegime;
    }

    public function getIdTypePourcentage()
    {
        return $this->idTypePourcentage;
    }

    public function setIdTypePourcentage($idTypePourcentage)
    {
        $this->idTypePourcentage = $idTypePourcentage;
    }

    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;
    }
}
?>

}
?>
