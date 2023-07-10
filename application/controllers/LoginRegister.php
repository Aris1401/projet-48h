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
/////////////////////////////////////////////////////////////////////////////////////////////////////////////    
    public function inscription() {
        $this->load->view("frontoffice/login/Inscription");
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function validerInscription()  {
        $this->load->helper('UI');
        $this->load->helper('url');

        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $email = $this->input->post('email');
        $motDePasse = $this->input->post('motDePasse');
        // $idTypeObjectif = $this->input->post('idTypeObjectif');
        // $estAdmin = $this->input->post('estAdmin');
        if (check_inputs(array($nom, $prenom, $email,$motDePasse))) {
            $this->load->model('Utilisateur_Model', 'user');

            $user = new Utilisateur_Model();
            $user->setNom($nom);
            $user->setPrenom ($prenom);
            $user->setEmail($email);
            $user->setMotDePasse($motDePasse);
            $user->setIdTypeObjectif(1);
            $user->setEstAdmin(0);

            session_start();

            $_SESSION['current_user'] = $this->user->getUtilisateurById($this->user->doRegister($user));

            // redirect('frontoffice/acceuil');
        } 
        else
         {
            redirect('loginRegister?error=1');
          }
        }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////         
        function validerLogin() {
            session_start();

            $email = $this->input->post('email');
            $motDePasse = $this->input->post('motDePasse');

            $this->load->model('Utilisateur_Model', 'user');

            $ligne_resultat = $this->user->doLogin($email, $motDePasse);
            
            if ($ligne_resultat == null) {
                echo "False|";
            } else {
                if (!isset($_SESSION['current_user'])) {
                    $_SESSION['current_user'] = $this->user->getUtilisateurById($ligne_resultat['idUtilisateur']);
                }
                echo "True|";
            }
        }           

    
    public function suiteInscription() {
        $this->load->view("frontoffice/login/SuiteInscription");
    }
    
    public function profilUser(){
        $this->load->view("frontoffice/login/ProfilUtilisateur");
    }
}
