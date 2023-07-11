<?php
class Activite_Model extends CI_Model
{
    private $idActivite;
    private $designationActivite;
    private $description;
    
    public function setIdActivite($idActivite)
    {
        $this->idActivite = $idActivite;
    }
    
    public function getIdActivite()
    {
        return $this->idActivite;
    }
    
    public function setDesignationActivite($designationActivite)
    {
        $this->designationActivite = $designationActivite;
    }
    
    public function getDesignationActivite()
    {
        return $this->designationActivite;
    }
    
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function AllActivite() {
        $query = $this->db->get('Activite');
        
        $regime = array();
        
        foreach ($query->result() as $row) {
            array_push($regime, $row);
        }
        
        return $regime;
    }
//////////Insert Activite
public function doRegister($designationActivite, $description)
{
    $query = "INSERT INTO Activite (designationActivite, description) VALUES (%s, %s)";
    $query = sprintf($query, $this->db->escape($designationActivite),
    $this->db->escape($description));      
    $this->db->query($query);

    return $this->db->insert_id();
}

//////////Delete Activite
public function doRegister($idRegime)
{
    $query = "DELETE FROM Activite WHERE idActivite = %s";
    $query = sprintf($query, $this->db->escape($idActivite));
         
    $this->db->query($query);

    return $this->db->insert_id();
}

/////////Update Activite
public function doUpdate($idActivite, $designationActivite, $description)
{
    $query = "UPDATE Regime SET designationActivite = %s, description = %s  WHERE idActivite = %s";
    $query = sprintf($query, $this->db->escape($designationRegime), $this->db->escape($description),
    $this->db->escape($idActivite));
         
    $this->db->query($query);

    return $this->db->affected_rows();
}
/////////////Select all
public function getAllActivite() {
    $query = "SELECT * FROM Activite";

    $resultat = $this->db->query($query);

    $currentObjects = array();

    foreach($resultat->result_array() as $data) {
        array_push($currentObjects, $data);
    }

    return $currentObjects;
}


}

?>
