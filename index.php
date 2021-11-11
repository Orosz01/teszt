<?php
session_start();

require 'includes/db.inc.php';

require 'model/Ulesrend.php';

$tanulo = new Ulesrend;

$page = 'index';
if(!empty($_REQUEST['action'])) {
	if($_REQUEST['action'] == 'kilepes') session_unset();
}

if(!empty($_SESSION["id"])){
    $title=$_SESSION["nev"].": Kilépés";
    $action = "kilepes";
}
else{
    $title = "Belépés"
    $action = "belepes"
}
if(isset($_REQUEST['page'])){
}
    
$menupontok = array('index' => "Főoldal", 'ulesrend' => "Ülésrend", $link => $title);

if(isset($_REQUEST['page'])){
    if(file_exists('controller/'.$_REQUEST['page'].'.php')){
        $page = $_REQUEST['page'];
    }
}

$menupontok = array('index' => "Főoldal",
                    'ulesrend' => "Ülésrend",
                    'felhasznalo' => $title);
$title = $menupontok[$page];

include 'includes/htmlheader.inc.php';
include 'controller/'.$page.'.php';
?>
<body>

</body>