<?php
session_start();

require 'includes/db.inc.php';

require 'includes/functions.inc.php';

require 'model/Ulesrend.php';

$title="Belépés";
$link="belepes.php";

$tanulo = new Ulesrend;
if(!empty($_SESSION["id"])){
    $title=$_SESSION["nev"].": Kilépés";
    $action = "kilepes";
}
else{
    $title = "Belépés"
    $action = "belepes"
}
if(isset($_REQUEST['page'])){
    
$menupontok = array('index' => "Főoldal", 'ulesrend' => "Ülésrend", $link => $title);

$page = "index";

if(isset($_REQUEST['page'])){
    if(file_exists('controller/'.$_REQUEST['page'].'.php')){
        $page = $_REQUEST['page'];
    }
}
$title = $menupontok[$page];

include 'includes/htmlheader.inc.php';

?>
<body>
<?php

include 'includes/menu.inc.php';

$page ='index';

if(isset($_REQUEST['page'])){
    if(file_exists('controller/'.$_REQUEST['page'].'.php')){
        $page = $_REQUEST['page'];
    }
}
include 'controller/'.$page.'.php';
?>
</body>