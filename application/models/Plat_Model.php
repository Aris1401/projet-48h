<?php
class Plat_Model extends CI_Model
{
    private $idPlat;
    private $recette;
    private $nom;
    private $calorie;
    private $description;
    private $image;
    
    public function setIdPlat($idPlat)
    {
        $this->idPlat = $idPlat;
    }
    
    public function getIdPlat()
    {
        return $this->idPlat;
    }
    
    public function setRecette($recette)
    {
        $this->recette = $recette;
    }
    
    public function getRecette()
    {
        return $this->recette;
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    
    public function getNom()
    {
        return $this->nom;
    }
    
    public function setCalorie($calorie)
    {
        $this->calorie = $calorie;
    }
    
    public function getCalorie()
    {
        return $this->calorie;
    }
    
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setImage($image)
    {
        $this->image = $image;
    }
    
    public function getImage()
    {
        return $this->image;
    }
////////////////Select All
    public function getAllPlat() {
        $query = "SELECT * FROM Plat";
    
        $resultat = $this->db->query($query);
    
        $currentObjects = array();
    
        foreach($resultat->result_array() as $data) {
            array_push($currentObjects, $data);
        }
    
        return $currentObjects;
    }
    
    public function getPlat($idPlat) {
        $query = $this->db->where("idPlat", $idPlat)->get("plat");
        return $query->row();
    }


}

?>
