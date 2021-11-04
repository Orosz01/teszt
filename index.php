<?php
session_start();

require 'db.inc.php';

require 'functions.inc.php';

require 'model/Ulesrend.php';

$title="Belépés";
$link="belepes.php";

$tanulo = new Ulesrend;
if(!empty($_SESSION["id"])){
    $title=$_SESSION["nev"].": Kilépés";
    $link="index.php?kilep=1";
}

$menupontok = array('index' => "Főoldal", 'ulesrend' => "Ülésrend", $link => $title);

$page = "index";

if(isset($_REQUEST['page'])){
    if(file_exists('controller/'.$_REQUEST['page'].'.php')){
        $page = $_REQUEST['page'];
    }
}
$title = $menupontok[$page];

include 'htmlheader.inc.php';

?>
<body>
<?php

include 'menu.inc.php';

$page ='index';

if(isset($_REQUEST['page'])){
    if(file_exists('controller/'.$_REQUEST['page'].'.php')){
        $page = $_REQUEST['page'];
    }
}
include 'controller/'.$page.'.php';
?>
</body>