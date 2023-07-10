<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of SuggestionRegime
 *
 * @author aris
 */
class SuggestionRegime extends CI_Controller{
    public function index() {
        $this->load->model("Regime_Model", "Regime");
        
        $regimes = $this->Regime->getRegimeFromPoids($this->input->get("variance"))[0];
        
        $data = array('title' => "Suggestion");
        
        $this->load->view("frontoffice/Navbar", $data);
        $this->load->view("frontoffice/suggestion/Suggestion");
    }
    
    public function Suggerer() {
        $this->load->model("Regime_Model", "Regime");
        
        echo $this->Regime->getRegimeFromPoids($this->input->get("variance"));
    }
}
