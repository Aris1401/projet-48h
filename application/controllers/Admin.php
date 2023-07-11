<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Admin
 *
 * @author aris
 */
class Admin extends CI_Controller{
    public function index() {
        $data = array('title' => "Statistiques");
        $this->load->view("backoffice/Header", $data);
        $this->load->view("backoffice/home/Index");
        $this->load->view("backoffice/Footer");
    }
    
    public function regime() {
        $this->load->model("Regime_Model", "Regime");
        
        $data = array('title' => "Regime");
        
        $content = array('regimes' => $this->Regime->AllRegime());
        $this->load->view("backoffice/Header", $data);
        $this->load->view("backoffice/home/Regime", $content);
        $this->load->view("backoffice/Footer");
    }
    
    public function activite() {
        $this->load->model("Activite_Model", "Activite");
        
        $data = array('title' => "Activite Sportive");
        
        $content = array('regimes' => $this->Activite->AllActivite());
        $this->load->view("backoffice/Header", $data);
        $this->load->view("backoffice/home/ActiviteSportive", $content);
        $this->load->view("backoffice/Footer");
    }
    
    public function validation() {
        $this->load->model("ValidationCode_Model", "ValidationCode");
        
        $data = array('title' => "Activite Sportive");
        
        $content = array('invalides' => $this->ValidationCode->getAllInvalideCodes());
        $this->load->view("backoffice/Header", $data);
        $this->load->view("backoffice/home/ValidationCodes", $content);
        $this->load->view("backoffice/Footer");
    }

    public function statistique(){
        $data = array('title' => "Statistiques");

        $this->load->view("backoffice/Header", $data);
        $this->load->view("backoffice/home/Statistique");
        $this->load->view("backoffice/Footer");
    }
}
