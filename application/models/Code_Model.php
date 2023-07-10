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

            $query = "SELECT * FROM ".$table_name."WHERE idCode =  %ds";
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

        public function getCodeValideByUtilisateur($idUtilisateur){
            $validationCodeModel = new ValidationCode_Model();
            $data = $validationCodeModel->getByidUtilisateur($idUtilisateur);
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
    } 
?>
