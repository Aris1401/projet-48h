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
        $data = array('title' => "Accueil");
        $this->load->view("frontoffice/Navbar", $data);
        $this->load->view("frontoffice/home/Accueil");
    }
}
