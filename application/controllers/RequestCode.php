<?php
    class RequestCode extends CI_Controller{
        public function sendRequestCode() {
            $this->load->model("Utilisateur_Model","Utilisateur");
            session_start();
            if (isset($_SESSION['current_user'])) {
                $user = $_SESSION['current_user'];
                if($user->getEstAdmin() == 1){
                    redirect(base_url("Admin"));
                }                
                $this->load->model("Code_Model","code");
                $code = $this->input->get('code');
                //echo var_dump($_SESSION['current_user']);
                $idUtilisateur = $_SESSION['current_user']->getIdUtilisateur();
                $this->code->requestToValidCode($idUtilisateur,$code);
                redirect(base_url("Profil"));
            }
            else{
                redirect(base_url("LoginRegister/Login"));
                return;
            }
        }

        public function acceptRequest(){
            $this->load->model("Utilisateur_Model","Utilisateur");
            session_start();
            if (isset($_SESSION['current_user'])) {
                $user = $_SESSION['current_user'];
                if($user->getEstAdmin() == 0){
                    redirect(base_url("Accueil"));
                }                
                $this->load->model("Code_Model","code");
                $this->load->model("ValidationCode_Model","code");
                $id = $this->input->get('idCode');
                $this->code->validerCode($id);
                redirect(base_url("Admin/validation"));
            }
            else{
                redirect(base_url("LoginRegister/Login"));
                return;
            }
        }

        public function refuseRequest(){
            $this->load->model("Utilisateur_Model", "Utilisateur");
            session_start();
            if (isset($_SESSION['current_user'])) {
                $user = $_SESSION['current_user'];
                if($user->getEstAdmin() == 0){
                    redirect(base_url("Accueil"));
                }
                $this->load->model("ValidationCode_Model","code");
                $id = $this->input->get('idCode');
                $this->code->refuserCode($id);
                redirect(base_url("Admin/validation"));
            }
            else{
                redirect(base_url("LoginRegister/Login"));
                return;
            }
        }
    }
?>