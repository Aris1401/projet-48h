<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Accueil
 *
 * @author aris
 */
class Accueil extends CI_Controller{
    public function index() {
        $this->load->model("Utilisateur_Model", "Utilisateur");
        session_start();
        if (isset($_SESSION['current_user'])) {
            $user = $_SESSION['current_user'];
            if($user->getEstAdmin() == 0){
                redirect(base_url("Accueil"));
            }
            else if($user->getEstAdmin() == 0){
                redirect(base_url("Admin"));
            }
        }
        else{
            redirect(base_url("LoginRegister/Login"));
        }        
        $data = array('title' => "Accueil");
        $this->load->view("frontoffice/Navbar", $data);
        $this->load->view("frontoffice/home/Accueil");
    }

    public function logout(){
        session_start();
        session_destroy();
        redirect(base_url("LoginRegister/Login"));
    }



}
