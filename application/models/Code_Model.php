<?php
require_once('ValidationCode_Model.php');

    class Code_Model extends CI_Model
    {    
        private $idCode;
        private $code;
        private $valeurCode;
        private $etat;

        public function setIdCode($idCode){
            $this->idCode = $idCode;
        }
        
        public function getIdCode(){
            return $this->idCode;
        }
        
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

        public function getById($idCode)
        {
            $table_name = 'Code';

            $query = "SELECT * FROM ".$table_name." WHERE idCode =  %s";
            $query = sprintf($query, $this->db->escape($idCode));

            $resultat = $this->db->query($query);
            $results = $resultat->row_array();

            if($results != null){
                $code = new Code_Model();
                $code->setIdCode($idCode);
                $code->setCode($results['code']);
                $code->setValeurCode($results['valeurCode']);
                $code->setEtat($results['etat']);

                return $code;
            }
            else{
                throw new Exception("Code inexistant");
            }
        }

        public function getByCode($code){
            $table_name = 'Code';
        
            $query = "SELECT * FROM ".$table_name." WHERE code =  %s";
            $query = sprintf($query, $this->db->escape($code));
        
            $resultat = $this->db->query($query);
            $results = $resultat->row_array();
        
            if($results != null){
                $code = new Code_Model();
                $code->setIdCode($results['idCode']);
                $code->setCode($code);
                $code->setValeurCode($results['valeurCode']);
                $code->setEtat($results['etat']);
        
                return $code;
            }
            else{
                throw new Exception("Code inexistant");
            }
        }

        public function requestToValidCode($idUtilisateur,$code){
            if($this->checkIfValide($code)){
                $codeModel = $this->getByCode($code);
                $validationCodeModel = new ValidationCode_Model();
                $validationCodeModel->setIdCode($codeModel->getIdCode());
                $validationCodeModel->setIdUtilisateur($idUtilisateur);
                $validationCodeModel->setDateValidation(NULL);
                $validationCodeModel->save();
            }
        }
        
        public function checkIfValide($code){
            $codeModel = $this->getByCode($code);
            if($codeModel->getEtat() == 0){
                $validationCodeModel = new ValidationCode_Model();
                if($validationCodeModel->checkIfValider($codeModel->getIdCode())){
                    return false;
                }
                return true;
            }
            else{
                return false;
            }
        }

        public function getCodeValideByUtilisateur($idUtilisateur){
            $validationCodeModel = new ValidationCode_Model();
            $data = $validationCodeModel->getByidUtilisateurValider($idUtilisateur);
            $codes = array();
            if (!empty($data)) {
                foreach ($data as $row) {
                    $codeModel = new Code_Model();
                    $codeModel->setIdCode($row['idValidationCode']);
                    $codeModel->setCode($row['code']);
                    $codeModel->setValeurCode($row['valeurCode']);
                    $codeModel->setEtat($row['etat']);
        
                    array_push($codes,$codeModel);
                }
            }
            return $codes;
        }

        public function getMontantCodeTotal($idUtilisateur){
            $codes = $this->getCodeValideByUtilisateur($idUtilisateur);
            $somme = 0;
            for ($i=0; $i < count($codes); $i++) { 
                $somme = $somme + $codes[$i]->getValeurCode();
            }
            return $somme;
        }

        public function ajoutCode($code,$valeur){
            $data = array(
                'code' => $code,
                'valeurCode' => $valeur,
                'etat' => 0
            );
        
            $this->db->insert('Code', $data);
        }

        public function updateCode($idCode,$code,$valeur,$etat){
            $existingCode = $this->getById($idCode);
    
            if ($existingCode) {
                $data = array(
                    'code' => $code,
                    'valeurCode' => $valeur,
                    'etat' => $etat
                );
        
                $this->db->where('idCode', $idCode);
                $this->db->update('Code', $data);
                
                return true;
            }
            
            return false;
        }

        public function deleteCode($idCode){
            $existingCode = $this->getById($idCode);
    
            if ($existingCode) {
                $this->db->where('idCode', $idCode);
                $this->db->delete('Code');
                
                return true;
            }
            
            return false;
        }
    } 
?>
