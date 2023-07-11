<?php
    class RequestCode extends CI_Controller{
        public function sendRequestCode() {
            $this->load->model("Code_Model","code");
            $this->load->model("Utilisateur_Model","Utilisateur");
            session_start();
            
            if (!isset($_SESSION['current_user'])) {
                redirect(base_url("LoginRegister/Login"));
                return;
            }
            
            $code = $this->input->get('code');
            echo var_dump($_SESSION['current_user']);
            $idUtilisateur = $_SESSION['current_user']->getIdUtilisateur();
            $this->code->requestToValidCode($idUtilisateur,$code);
            redirect(base_url("Profil"));
        }

        public function acceptRequest(){
            $this->load->model("ValidationCode_Model","code");
            $id = $this->input->get('idCode');
            $this->code->validerCode($id);
            redirect(base_url("Admin/validation"));
        }

        public function refuseRequest(){
            $this->load->model("ValidationCode_Model","code");
            $id = $this->input->get('idCode');
            $this->code->refuserCode($id);
            redirect(base_url("Admin/validation"));
        }
    }
?>