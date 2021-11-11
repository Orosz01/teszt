<?php

require_once 'Kijeloltfelhasznalok.php';

class Admin extends Kijeloltfelhasznalok{

    function _construct(){
        $this->tablanev = 'adminok';
    }
}

//$tanulo->get_id();

?>