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
        $this->load->model('Utilisateur_Model', 'Utilisateur');
        session_start();
        $this->load->model("Regime_Model", "Regime");
        
        if (isset($_SESSION['current_user'])) {
            $user = $_SESSION['current_user'];
            if($user->getEstAdmin() == 1){
                redirect(base_url("Admin"));
            }
            $regimes = $this->Regime->getRegimeFromPoids($this->input->get("variance"));
        
            $data = array('title' => "Suggestion");
            
            $content = array('suggestions' => $regimes);
            
            $this->load->view("frontoffice/Navbar", $data);
            $this->load->view("frontoffice/suggestion/Suggestion", $content);
        }
        else{
            redirect(base_url("LoginRegister/Login"));
            return;
        }
    }
    
    public function Suggerer() {
        $this->load->model("Utilisateur_Model", "Utilisateur");
        session_start();
        if (isset($_SESSION['current_user'])) {
            $user = $_SESSION['current_user'];
            if($user->getEstAdmin() == 1){
                redirect(base_url("Admin"));
            }
            $this->load->model("Regime_Model", "Regime");
            
            echo $this->Regime->getRegimeFromPoids($this->input->get("variance"));
        }
        else{
            redirect(base_url("LoginRegister/Login"));
            return;
        }
    }
    
    public function Payer() {
        $this->load->model("Utilisateur_Model", "Utilisateur");
        session_start();
        if (isset($_SESSION['current_user'])) {
            $user = $_SESSION['current_user'];
            if($user->getEstAdmin() == 1){
                redirect(base_url("Admin"));
            }
            $regime = $this->input->get("regime");
            $pour = $this->input->get("pour");
            
            $this->load->model("Transaction_Model", "Transaction");
            $this->load->model("HistoriqueAchatRegime_Model", "Historique");
            $this->load->model("Regime_Model", "Regime");
            
            
            
            $regimes = $this->Regime->getRegimeFromPoids($pour);
            $regime_instance = null;
            
            foreach($regimes as $r) {
                if ($r->idRegime == $regime) $regime_instance = $r;
            }
            
            $nonnaie_utilisateur = $this->Utilisateur->getMonnaieCouranteWithTransaction($_SESSION['current_user']->getIdUtilisateur());
            if ($nonnaie_utilisateur < $regime_instance->prix) redirect(base_url("Profil"));
            
            // Remise sur abonnement
            $prix = $regime_instance->prix;
            
            $remise = 0;
            if (isset($_SESSION['abonnement'])) {
                $remise = (double) $_SESSION['abonnement']->type->reduction;
            }
            
            $prix = $prix - ($prix * ($remise / 100));
            
            // Transation
            $this->Transaction->ajouter($prix, 0, $_SESSION['current_user']->getIdUtilisateur());
            $this->Historique->ajouterHistorique($regime, $prix);
            
            redirect(base_url("Accueil"));
        }
        else{
            redirect(base_url("LoginRegister/Login"));
            return;
        }
    }
}
