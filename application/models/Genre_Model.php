<?php
    class Genre_Model extends CI_Model
    {
        private $idGenre;
        private $designationGenre;

        public function getIdGenre()
        {
            return $this->idGenre;
        }

        public function setIdGenre($idGenre)
        {
            $this->idGenre = $idGenre;
        }

        public function getDesignationGenre()
        {
            return $this->designationGenre;
        }

        public function setDesignationGenre($designationGenre)
        {
            $this->designationGenre = $designationGenre;
        }
    }
?>