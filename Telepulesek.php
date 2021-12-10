
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <style>
        td,tr{
	border:5px solid black;
	font-size: 20px;
}

    </style>
</head>
<?php

require 'includes/db.inc.php';

set_time_limit(500);
$myfile = fopen("telepulesek.txt" , "r");
while(!feof($myfile)){
    $tArray = explode("\t",fgets($myfile));
    $sql = "INSERT INTO `Telepules` (`Iranyito`, `Telepules`) VALUES ('".$tArray[0]."', '".$tArray[1]."');";
    $conn->query($sql);
   
//echo "<tr><td>".$tArray[0]."</td> ","<td>".$tArray[1]."</td></tr><br>";
}
fclose($myfile);
?>