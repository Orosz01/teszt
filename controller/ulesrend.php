<?php

if(!empty($_POST["hianyzo_id"])){
  $sql="INSERT INTO hianyzok VALUES(".$_POST["hianyzo_id"].")";
  $result=$conn->query($sql);
}
elseif(!empty($_GET['nem_hianyzo'])){
  $sql="DELETE FROM hianyzok WHERE id=".$_GET['nem_hianyzo'];
  $result=$conn->query($sql);
}

$hianyzok = getids('hianyzok',$con); //Ebben lesznek a hiányzók id-i felsorolva

$adminok = array();

$sql = "SELECT id FROM hianyzok";
if(!$result = $conn->query($sql)) echo $conn->error;
if ($result->num_rows > 0) {
  $sor=0;
  while($row = $result->fetch_assoc()) {
    $hianyzok[] = $row['id'];
  }
}
$sql = "SELECT id FROM adminok";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$adminok[] = $row['id'];
	}
}

$en = 0;
if(!empty($_SESSION["id"])) $en = $_SESSION["id"];

$tanar = 17;

$tanuloIdk = $tanulo->tanlista($conn);
include 'view/ulesrend.php';