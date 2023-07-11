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
        session_start();
        
        if (!isset($_SESSION['current_user'])) {
            redirect(base_url("LoginRegister/Login"));
            return;
        }
        
        $data = array('title' => "Statistiques");
        $this->load->view("backoffice/Header", $data);
        $this->load->view("backoffice/home/Index");
        $this->load->view("backoffice/Footer");
    }
 /////////////////////////////////////////////////////////////////////   
    public function regime() {
        session_start();
        
        if (!isset($_SESSION['current_user'])) {
            redirect(base_url("LoginRegister/Login"));
            return;
        }
        
        $this->load->model("Regime_Model", "Regime");
        
        $data = array('title' => "Regime");
        $content = array('regimes' => $this->Regime->AllRegime());
        $this->load->view("backoffice/Header", $data);
        $this->load->view("backoffice/home/Regime", $content);
        $this->load->view("backoffice/Footer");
    }
    
    public function activite() {
        session_start();
        
        if (!isset($_SESSION['current_user'])) {
            redirect(base_url("LoginRegister/Login"));
            return;
        }
        
        $this->load->model("Activite_Model", "Activite");
        
        $data = array('title' => "Activite Sportive");
        
        $content = array('regimes' => $this->Activite->AllActivite());
        $this->load->view("backoffice/Header", $data);
        $this->load->view("backoffice/home/ActiviteSportive", $content);
        $this->load->view("backoffice/Footer");
    }
    
    public function validation() {
        session_start();
        
        if (!isset($_SESSION['current_user'])) {
            redirect(base_url("LoginRegister/Login"));
            return;
        }
        
        $this->load->model("ValidationCode_Model", "ValidationCode");
        
        $data = array('title' => "Activite Sportive");
        
        $content = array('invalides' => $this->ValidationCode->getAllInvalideCodes());
        $this->load->view("backoffice/Header", $data);
        $this->load->view("backoffice/home/ValidationCodes", $content);
        $this->load->view("backoffice/Footer");
    }
/////////////////////////////////////////////////////////////////////
public function activiteSport() {
    $this->load->model("ActiviteSport_Model", "ActiviteSportive");
    
    $data = array('title' => "Activite Sportive");
    
    $content = array('regimes' => $this->ActiviteSportive->AllActivite());
    $this->load->view("backoffice/Header", $data);
    $this->load->view("backoffice/home/ActiviteSportive", $content);
    $this->load->view("backoffice/Footer");
}
//////////////////////////////////////////////////////////////////
    public function statistique(){
        $this->load->model("AbonnementJoinType_Model","abonnement");

        $data = array('title' => "Statistiques");

        $content = array('abonnements' => $this->abonnement->getAllAbonnements());

        $this->load->view("backoffice/Header", $data);
        $this->load->view("backoffice/home/Statistique", $content);
        $this->load->view("backoffice/Footer");
    }

/////////////////////////////REGIME////////////////////////////////////////
public function insertRegime()  
{
    $this->load->helper('UI');
    $this->load->helper('url');
    $this->load->model('Utilisateur_Model', 'user');
    $designation = $this->input->post('designation');
    $description = $this->input->post('description');
    $image = $this->input->post('image');
    $duree = $this->input->post('duree');
    $variationPoids = $this->input->post('variationPoids');
    $prixRegime = $this->input->post('prixRegime');
    if (check_inputs(array($designation,$description,$duree,$variationPoids,$prixRegime))) 
    {
        $this->load->model('Regime_Model', 'regime');
        $user = new Regime_Model();
            $user->setDesignationRegime($designation);
            $user->setDescription ($description);
            $user->setImage($image);
            $user->setDuree($duree);
            $user->setVariationPoids($variationPoids);
            $user->setPrixRegime($prixRegime);
        session_start();
        $_SESSION['current_user'] = $this->user->getUtilisateurById($this->regime->doRegister($designation,$description,$image,$duree,$variationPoids,$prixRegime));
        redirect('Admin/Regime');
    } 
   
}
////////////////////////////////REGIME/////////////////////////////////////
public function deleteRegime()  
{
    $this->load->helper('UI');
    $this->load->helper('url');
    $idRegime = $this->input->get('id');
    if (check_inputs(array($idRegime))) 
    {
        $this->load->model('Regime_Model', 'regime');
        $user = new Regime_Model();
        $user->setIdRegime($idRegime);
        session_start();
        $_SESSION['current_user'] =$this->regime->doDelete($idRegime);
        redirect('Admin/Regime');
    }   
}
/////////////////////////////////REGIME////////////////////////////////////
public function updateRegime()
{
    $this->load->helper('UI');
    $this->load->helper('url');
    $this->load->model('Utilisateur_Model', 'user');
    $idRegime = $this->input->post('idRegime');
    $designation = $this->input->post('designation');
    $description = $this->input->post('description');
    $image = $this->input->post('image');
    $duree = $this->input->post('duree');
    $variationPoids = $this->input->post('variationPoids');
    $prixRegime = $this->input->post('prixRegime');
/////image a modifier 
    if (check_inputs(array($idRegime,$designation,$description,$duree,$variationPoids,$prixRegime))) 
    {
        $this->load->model('Regime_Model', 'regime');
        $user = new Regime_Model();
            $user->setIdRegime($idRegime);
            $user->setDesignationRegime($designation);
            $user->setDescription ($description);
            $user->setImage($image);
            $user->setDuree($duree);
            $user->setVariationPoids($variationPoids);
            $user->setPrixRegime($prixRegime);
        session_start();
        $_SESSION['current_user'] = $this->user->getUtilisateurById($this->regime->doUpdate($idRegime,$designation,$description,$image,$duree,$variationPoids,$prixRegime));
        redirect('Admin/Regime');
    }   
}
/////////////////////////////////ACTIVITE SPORT////////////////////////////////////
public function insertActiviteSport()  
{
    $this->load->helper('UI');
    $this->load->helper('url');
    $this->load->model('Utilisateur_Model', 'user');
    $idActivite = $this->input->post('idActivite');
    $idSport = $this->input->post('idSport');
    $duree = $this->input->post('duree');
    $nombre = $this->input->post('nombre');
    $variationPoids = $this->input->post('variationPoids');
    if (check_inputs(array($idActivite,$idSport,$duree,$nombre,$variationPoids))) 
    {
        $this->load->model('ActiviteSport_Model', 'ActiviteSport');
        $user = new ActiviteSport_Model();
            $user->setIdActivite( $idActivite);
            $user->setIdSport ($idSport);
            $user->setDuree($duree);
            $user->setNombre($nombre);
            $user->setVariationPoids($variationPoids);
        session_start();
        $_SESSION['current_user'] = $this->user->getUtilisateurById($this->ActiviteSport->doRegister($idActivite,$idSport,$duree,$nombre,$variationPoids));  
        redirect('Admin/activiteSport');
    }   
    else{
        echo("erreur");
    }
}
////////////////////////////////ACTIVITE SPORT/////////////////////////////////////
public function deleteActiviteSport()  
{
    $this->load->helper('UI');
    $this->load->helper('url');
    $idActiviteSport = $this->input->get('id');
    if (check_inputs(array($idActiviteSport))) 
    {
        $this->load->model('ActiviteSport_Model', 'activiteSport');
        $user = new ActiviteSport_Model();
        $user->setIdActiviteSport($idActiviteSport);
        session_start();
        $_SESSION['current_user'] =$this->activiteSport->doDelete($idActiviteSport);
        redirect('Admin/activiteSport');
    } 
    else
    {
        echo("erreur");
    }  
}
////////////////////////////////ACTIVITE SPORT/////////////////////////////////////
public function updateActiviteSport()
{
    $this->load->helper('UI');
    $this->load->helper('url');
    $this->load->model('Utilisateur_Model', 'user');
    $idActiviteSport = $this->input->post('idActiviteSport');
    $idActivite = $this->input->post('idActivite');
    $idSport = $this->input->post('idSport');
    $duree = $this->input->post('duree');
    $nombre = $this->input->post('nombre');
    $variationPoids = $this->input->post('variationPoids');
    if (check_inputs(array($idActiviteSport,$idActivite,$idSport,$duree,$nombre,$variationPoids))) 
    {
        $this->load->model('ActiviteSport_Model', 'activiteSport');
        $user = new ActiviteSport_Model();
        $user->setIdActiviteSport( $idActiviteSport);
        $user->setIdActivite( $idActivite);
        $user->setIdSport ($idSport);
        $user->setDuree($duree);
        $user->setNombre($nombre);
        $user->setVariationPoids($variationPoids);
        session_start();
        $_SESSION['current_user'] = $this->user->getUtilisateurById($this->activiteSport->doUpdate($idActiviteSport,$idActivite,$idSport,$duree,$nombre,$variationPoids));
        redirect('Admin/Regime');
    }   
}

}

