<?php
require_once('Code_Model.php');

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

    public function getById($idCode)
    {
        $table_name = 'ValidationCode';

        $query = "SELECT * FROM ".$table_name."WHERE idCode =  %i";
        $query = sprintf($query, $this->db->escape($idCode));

        $resultat = $this->db->query($query);
        $results = $resultat->row_array();

        if($results != null){
            $code = new ValidationCode_Model();
            $code->setIdCode($idCode);
            $code->setIdUtilisateur($results['idUtilisateur']);
            $code->setDateValidation($results['dateValidation']);

            return $code;
        }
        else{
            throw new Exception("Code inexistant");
        }
    }

    public function save(){
        $data = array(
            'idCode' => $this->idCode,
            'idUtilisateur' => $this->idUtilisateur,
            'dateValidation' => $this->dateValidation
        );
    
        $this->db->insert('ValidationCode', $data);
    }

    public function getByidUtilisateurValider($idUtilisateur){
        $table_name = 'ValidationCode';

        $query = "SELECT * FROM ".$table_name."WHERE idUtilisateur =  %i AND dateValidation IS NOT NULL";
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

    public function checkIfValider($idCode){
        $table_name = 'ValidationCode';
    
        $query = "SELECT * FROM ".$table_name." WHERE idCode = %i AND dateValidation IS NOT NULL";
        $query = sprintf($query, $this->db->escape($idCode));
    
        $resultat = $this->db->query($query);
        $numRows = $resultat->num_rows();
    
        if($numRows > 0){
            return true;
        } else {
            return false;
        }
    }

    public function validerCode($idCode)
{
    $existingValidationCode = $this->getById($idCode);
    
    if ($existingValidationCode) {
        $dateValidation = date('Y-m-d');
        $data = array(
            'dateValidation' => $dateValidation
        );
        $this->db->where('idCode', $idCode);
        $this->db->update('ValidationCode', $data);

        $code = new Code_Model();
        $code = $code->getById($idCode);
        $code->updateCode($idCode,$code->getCode(),$code->getValeurCode(),10);
        
        return true;
    }
    
    return false;
}


    public function refuserCode($idCode){
        $existingValidationCode = $this->getById($idCode);    
        if ($existingValidationCode) {
            $this->db->where('idCode', $idCode);
            $this->db->delete('ValidationCode');                
            return true;
        }            
        return false;
    }
}

?>
