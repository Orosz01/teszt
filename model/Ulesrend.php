<?php

class Ulesrend{
    private $id;
    private $nev;
    private $sor;
    private $oszlop;
    private $jelszo;
    private $felhasznalo;

    public function set_user($id, $conn){
        //lekerjuk
        $sql = " SELECT id, nev, sor, oszlop, jelszo, felhasznalo FROM ulesrend ";
        $sql .= " WHERE id = $id ";
        $result = $conn-> query($sql);
        
        if ($result->num_rows > 0 ){
           $row = $result->fetch_assoc();
           $this-> id = $row['id'];
           $this-> nev = $row['nev'];
           $this-> sor = $row['sor'];
           $this-> oszlop = $row['oszlop'];
           $this-> jelszo = $row['jelszo'];
           $this-> felhasznalo = $row['felhasznalo'];
        }

    }
    public function get_id() {
        return $this->id;
    }
    public function get_nev() {
        return $this->nev;
    }
    public function get_sor() {
        return $this->sor;
    }
    public function get_oszlop() {
        return $this->oszlop;
    }
    public function get_jelszo() {
        return $this->jelszo;
    }
    public function get_felhasznalo() {
        return $this->felhasznalo;
    }
    
}
//$tanulo->get_id();
//$tanulo->get_nev();
//$tanulo->get_sor();
//$tanulo->get_oszlop();
//$tanulo->get_jelszo();
//$tanulo->get_felhasznalo();

?>