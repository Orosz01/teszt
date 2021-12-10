<?php
$myfile = fopen("newfile.txt","w") or die("Unable to open file!");

$txt = "John Doe\n";
fwrite($myfile, $txt);

$txt = "Jane Doe\n";
fwrite($myfile, $txt);

fclose($myfile);

$myfile = fopen("newfile.txt", "r");
while(! feof($myfile)) {
  $line = fgets($myfile);
  echo $line. "<br>";
}

fclose($myfile);

rename("newfile.txt","oldfile.txt");

echo copy("oldfile.txt","copyfile.txt");

$myfile = fopen("copyfile.txt", "r");
while(! feof($myfile)) {
  $line = fgets($myfile);
  echo $line. "<br>";
}

fclose($myfile);

unlink("oldfile.txt");

?>