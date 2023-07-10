<?php
class Regime_Model extends CI_Model
{
    private $idRegime;
    private $designationRegime;
    private $description;
    private $image;
    private $duree;
    private $variationPoids;
    
    public function setIdRegime($idRegime)
    {
        $this->idRegime = $idRegime;
    }
    
    public function getIdRegime()
    {
        return $this->idRegime;
    }
    
    public function setDesignationRegime($designationRegime)
    {
        $this->designationRegime = $designationRegime;
    }
    
    public function getDesignationRegime()
    {
        return $this->designationRegime;
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
    
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }
    
    public function getDuree()
    {
        return $this->duree;
    }
    
    public function setVariationPoids($variationPoids)
    {
        $this->variationPoids = $variationPoids;
    }
    
    public function getVariationPoids()
    {
        return $this->variationPoids;
    }

//////////Insert Regime
public function doRegister($designationRegime, $description, $image, $duree, $variationPoids)
{
    $query = "INSERT INTO Utilisateur (designationRegime, description, image, duree, variationPoids) VALUES (%s, %s, %s, %s, %s)";
    $query = sprintf($query, $this->db->escape($designationRegime),
     $this->db->escape($description), $this->db->escape($image), $this->db->escape($duree))
     $this->db->escape($variationPoids), ;
         
    $this->db->query($query);

    return $this->db->insert_id();
}
//////////Delete Regime
public function doRegister($idRegime)
{
    $query = "DELETE FROM Regime WHERE idRegime = %s";
    $query = sprintf($query, $this->db->escape($idRegime));
         
    $this->db->query($query);

    return $this->db->insert_id();
}
/////////Update Regime
public function doUpdate($idRegime, $designationRegime, $description, $image, $duree,$variationPoids)
{
    $query = "UPDATE Regime SET designationRegime = %s, description = %s, image = %s, duree = %s , variationPoids = %s WHERE idRegime = %s";
    $query = sprintf($query, $this->db->escape($designationRegime), $this->db->escape($description),
     $this->db->escape($image), $this->db->escape($duree), $this->db->escape($variationPoids)
    ,$this->db->escape($idRegime));
         
    $this->db->query($query);

    return $this->db->affected_rows();
}
/////////////Select all
public function getAllActivite() {
    $query = "SELECT * FROM Regime";

    $resultat = $this->db->query($query);

    $currentObjects = array();

    foreach($resultat->result_array() as $data) {
        array_push($currentObjects, $data);
    }

    return $currentObjects;
}


}
?>
