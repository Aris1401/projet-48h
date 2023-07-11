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
        $this->load->model("TypeAbonnement_Model", "TypeAbonnement");
        $this->load->model("ProfilUtilisateur_Model", "ProfilUtilisateur");
        $this->load->model("Code_Model", "Code");
        
        session_start();
        if (isset($_SESSION['current_user'])) {
            $user = $_SESSION['current_user'];
            if($user->getEstAdmin() == 1){
                redirect(base_url("Admin"));
            }
            
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
        else{
            redirect(base_url("LoginRegister/Login"));
        }
        
        $current_abonnement = null;
        if (isset($_SESSION['abonnement'])) {
            $current_abonnement = $_SESSION['abonnement'];
        }
        
        $content = array (
            'nom' => $_SESSION['current_user']->getNom(),
            'prenom' => $_SESSION['current_user']->getPrenom(),
            'abonnements' => $this->TypeAbonnement->getAllTypeAbonnement(),
            'current_abonnement' => $current_abonnement,
            'profil' => $this->ProfilUtilisateur->getProfilUtilisateurByIdd($_SESSION['current_user']->getIdUtilisateur()),
            'allCode' => $this->Code->getAllCode()
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
        else{
            $user = $_SESSION['current_user'];
            if($user->getEstAdmin() == 1){
                redirect(base_url("Admin"));
            }
        }
        echo $this->Utilisateur->getMonnaieCouranteWithTransaction($_SESSION['current_user']->getIdUtilisateur());
    }


    public function modifierProfil()  {
        $this->load->model('Utilisateur_Model', 'user');
        session_start();        
        if (isset($_SESSION['current_user'])) {
            $user = $_SESSION['current_user'];
            if($user->getEstAdmin() == 1){
                redirect(base_url("Admin"));
            }
            $this->load->helper('UI');
            $this->load->helper('url');
            $idUtilisateur = $this->input->post('idUtilisateur');
            $poids = $this->input->post('poids');
            $taille = $this->input->post('taille');
            $dateDeNaissance = $this->input->post('dateDeNaissance');
            $idGenre = $this->input->post('idGenre');

            $current_user = $_SESSION['current_user'];
            if (check_inputs(array($idUtilisateur, $poids, $taille, $dateDeNaissance, $idGenre)))
            {
                    $this->user->getUtilisateurById($this->user->getProfilUtilisateurById($current_user->getProfilUtilisateurByIdd(),$idUtilisateur, $poids, $taille, $dateDeNaissance, $idGenre));
                    redirect('LoginRegister/profilUtilisateur');
            } 
            else
            {
                redirect('loginRegister?error=1');
            }
        } else{
            redirect(base_url("LoginRegister/Login"));
        }
    }
    
    public function Sabonner() {
        $typeabonnement = $this->input->get("abonnement");
        
        $this->load->model("Abonnement_Model", "Abonnement");
        $this->load->model("Utilisateur_Model", "Utilisateur");
        
        session_start();
        
        $this->Abonnement->ajouterAbonnement($typeabonnement, $_SESSION['current_user']->getIdUtilisateur());
        $_SESSION['abonnement'] = $this->Abonnement->getAbonnementUser($_SESSION['current_user']->getIdUtilisateur());
        
        redirect(base_url("Profil"));
    }
    
    public function getIMC() {
        $this->load->model("Utilisateur_Model", "Utilisateur");
        $this->load->model("ProfilUtilisateur_Model", "ProfilUtilisateur");
        
        session_start();
        
        $imc = $this->ProfilUtilisateur->getIMC($_SESSION['current_user']->getIdUtilisateur());
        echo $imc;
    }
    
}
