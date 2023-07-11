<?php
    class RequestCode extends CI_Controller{
        public function sendRequestCode() {
            $this->load->model("Code_Model","code");
            session_start();
            $code = $this->input->get('code');
            echo var_dump($_SESSION['current_user']);
            $idUtilisateur = $_SESSION['current_user']->idUtilisateur;
            $this->code->requestToValidCode($idUtilisateur,$code);
            redirect(base_url("Profil"));
        }
    }
?>