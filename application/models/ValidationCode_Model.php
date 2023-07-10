<?php
class ValidationCode_Model extends CI_Model
{
    private $idValidationCode;
    private $idCode;
    private $idUtilisateur;
    private $dateValidation;

    public function setIdValidationCode($idValidationCode)
    {
        $this->idCode = $idValidationCode;
    }
    
    public function getIdValidationCode()
    {
        return $this->IdValidationCode;
    }
    
    public function setIdCode($idCode)
    {
        $this->idCode = $idCode;
    }
    
    public function getIdCode()
    {
        return $this->idCode;
    }
    
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;
    }
    
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }
    
    public function setDateValidation($dateValidation)
    {
        $this->dateValidation = $dateValidation;
    }
    
    public function getDateValidation()
    {
        return $this->dateValidation;
    }

    public function getByidUtilisateur($idUtilisateur){
        $table_name = 'ValidationCode';

        $query = "SELECT * FROM ".$table_name."WHERE idUtilisateur =  %i";
        $query = sprintf($query, $this->db->escape($idUtilisateur));

        $resultat = $this->db->query($query);
        $results = array();        

        if($resultat != null){
            foreach ($resultat->result_array() as $data) {
                array_push($results,$data);
            }
        }
        else{
            throw new Exception("Code validé par l'utilisateur sélectionné inexistant");
        }
        return $results;
    }
}

?>
