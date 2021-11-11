<?php

class Ulesrend{
    private $id;
    protected $tablanev;

    function _construct($tablanev){
        $this->tablanev = $tablanev;
    }

    public function set_id($id, $conn){
        //lekerjuk
        $sql = " SELECT id FROM $this->tablanev Where id = $id ";
        $sql .= " WHERE id = $id ";
        $result = $conn-> query($sql);
        if($conn-> query($sql)){}
        if ($result->num_rows > 0 ){
           $row = $result->fetch_assoc();
           $this-> id = $row['id'];
        }else{
            $sql = "INSERT INTO $this->tablanev VALUES ($id)";
            if ($result = $conn-> query($sql)){
                $this-> id = $id;
            }
        }
        }
    
    else{
        echo "Error" . $sql . "<br>" . $con ->error;
    }
}
  public function get_id() {
        return $this->id;
    }
  public function adminlista($conn){
        $lista = array();
        $sql = "SELECT id FROM $this->tablanev";
        if($result = $conn-> query($sql)){
        if ($result->num_rows > 0 ){
            while($row = $result->fetch_assoc()){
                $lista[]= $row['id'];
            }
        }
    }
 
    return $lista;
}
}
//$tanulo->get_id();

?>