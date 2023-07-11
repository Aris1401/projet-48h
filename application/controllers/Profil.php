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


    public function modifierProfil()  {
        $this->load->helper('UI');
        $this->load->helper('url');
        $this->load->model('Utilisateur_Model', 'user');
        session_start();
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
        }
    
}
