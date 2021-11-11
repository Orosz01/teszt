<?php

require 'model/Hianyzo.php';

require 'model/Admin';

$hianyzo = new Hianyzo();

if(!empty($_POST["hianyzo_id"])){
 $hianyzo->set_id($_POST["hianyzo_id"],$conn);
}
elseif(!empty($_GET['nem_hianyzo'])){
 $hianyzo->remove_id($_GET['nem_hianyzo'],$conn);
}

$hianyzok = $hianyzo-> lista($con);

$admin = new Admin();

$adminok = $admin->lista($conn);

$en = 0;
if(!empty($_SESSION["id"])) $en = $_SESSION["id"];

$tanar = 17;

$tanuloIdk = $tanulo->tanlista($conn);

include 'view/ulesrend.php';