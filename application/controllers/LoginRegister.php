<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of LoginRegister
 *
 * @author aris
 */
class LoginRegister extends CI_Controller{
    public function login() {
        $this->load->view("frontoffice/login/Login");
    }
    
    public function inscription() {
        $this->load->view("frontoffice/login/Inscription");
    }
    
    public function suiteInscription() {
        $this->load->view("frontoffice/login/SuiteInscription");
    }
    
    public function profilUser(){
        $this->load->view("frontoffice/login/ProfilUtilisateur");
    }
}
