<?php

require '../includes/db.inc.php';
require '';
class Admin extends Kijeloltfelhasznalok{

    function _construct(){
        $this->tablanev = 'adminok'
    }
}
$admin = new Admin();
$admin -> set_id();

//$tanulo->get_id();

?>