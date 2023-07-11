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
        session_start();
        
        if (!isset($_SESSION['current_user'])) {
            redirect(base_url("LoginRegister/Login"));
            return;
        }
        
        $data = array('title' => "Accueil");
        $this->load->view("frontoffice/Navbar", $data);
        $this->load->view("frontoffice/home/Accueil");
    }
}
