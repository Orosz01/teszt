<?php

class Ulesrend{
    private $id;
    protected $tablanev;

    function _construct($tablanev){
        $this->tablanev = $tablanev;
    }

    protected function set_id($id, $conn){
        //lekerjuk
        $sql = " SELECT id FROM $this->tablanev Where id = $id ";
        $sql .= " WHERE id = $id ";
        $result = $conn-> query($sql);
        if($conn-> query($sql)){}
        if ($result->num_rows > 0 ){
           $row = $result->fetch_assoc();
           $this-> id = $row['id'];
        }else{
            $sql = "INSERT INTO adminok ($id)";
            if ($result = $conn-> query($sql)){
                $this-> id = $id;
            }
        }
        }
    
    else{
        echo "Error" . $sql . "<br>" . $con ->error;
    }
}
    protected function get_id() {
        return $this->id;
    }
    protected function adminlista($conn){
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