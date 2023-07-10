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
        $data = array('title' => "Profil");
        $this->load->view("frontoffice/Navbar", $data);
        $this->load->view("frontoffice/profil/Profil");
    }
}
