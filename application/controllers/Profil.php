<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Profil
 *
 * @author aris
 */
class Profil extends CI_Controller{
    public function index() {
        $this->load->model("Utilisateur_Model", "Utilisateur");
        
        session_start();
        
        if (!isset($_SESSION['current_user'])) {
            redirect(base_url("LoginRegister/Login"));
            return;
        }
        
        $content = array (
            'nom' => $_SESSION['current_user']->getNom(),
            'prenom' => $_SESSION['current_user']->getPrenom()
        );
        
        $data = array('title' => "Profil");
        $this->load->view("frontoffice/Navbar", $data);
        $this->load->view("frontoffice/profil/Profil", $content);
    }
    
    public function GetBalance() {
        $this->load->model("Utilisateur_Model", "Utilisateur");
        
        session_start();
        
        if (!isset($_SESSION['current_user'])) {
            echo "0";
        }
        
        echo $this->Utilisateur->getMonnaieCouranteWithTransaction($_SESSION['current_user']->getIdUtilisateur());
    }
}
