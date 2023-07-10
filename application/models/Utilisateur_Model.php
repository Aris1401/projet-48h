<?php
    require_once('Code_Model.php');
    require_once('HistoriqueAchatRegime_Model.php');
    class Utilisateur_Model extends CI_Model
    {
        private $idUtilisateur;
        private $nom;
        private $prenom;
        private $email;
        private $motDePasse;
        private $idTypeObjectif;
        private $estAdmin;
        
        public function setIdUtilisateur($idUtilisateur)
        {
            $this->idUtilisateur = $idUtilisateur;
        }
        
        public function getIdUtilisateur()
        {
            return $this->idUtilisateur;
        }
        
        public function setNom($nom)
        {
            $this->nom = $nom;
        }
        
        public function getNom()
        {
            return $this->nom;
        }
        
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }
        
        public function getPrenom()
        {
            return $this->prenom;
        }
        
        public function setEmail($email)
        {
            $this->email = $email;
        }
        
        public function getEmail()
        {
            return $this->email;
        }
        
        public function setMotDePasse($motDePasse)
        {
            $this->motDePasse = $motDePasse;
        }
        
        public function getMotDePasse()
        {
            return $this->motDePasse;
        }
        
        public function setIdTypeObjectif($idTypeObjectif)
        {
            $this->idTypeObjectif = $idTypeObjectif;
        }
        
        public function getIdTypeObjectif()
        {
            return $this->idTypeObjectif;
        }
        
        public function setEstAdmin($estAdmin)
        {
            $this->estAdmin = $estAdmin;
        }
        
        public function getEstAdmin()
        {
            return $this->estAdmin;
        }

        public function getMonnaieCourante($idUtilisateur)
        {
            $code = new Code_Model();
            $historique = new HistoriqueAchatRegime_Model();
            $sommeCode = $code->getMontantCodeTotal($idUtilisateur);
            $depenseRegime = $historique->getDepenseTotal($idUtilisateur);
            if($sommeCode-$depenseRegime >= 0){
                return $sommeCode-$depenseRegime;   
            }
            else{
                throw new Exception("Montant négatif");
                
            }
        }
    }

?>