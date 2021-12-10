
  <table>
  <tr>
   <th colspan="3"> 
     <?php
      echo 'Ülésrend';
?>
    </th>
    <th colspan="3">Hiányzás: 
      <?php
      if(!empty($_SESSION['id'])){
        if(in_array($_SESSION['id'],$adminok)){
          ?>
    <form action=index.php?page=ulesrend" method="post">
    
    <select name="hianyzo_id">
      <?php

      
      if ($tanuloIdk) {
        foreach($tanuloIdk as $row) {
          $tanulo->set_user($row, $conn);
         if($tanulo->get_nev() and !in_array($row,$hianyzok))echo '<option value="'.$row.'">'.$tanulo->get_nev().'</option>';
        }
    }

    
     ?>
    
    </select><br>
    <input type="submit">
    <?php
        }}
    ?>
    </form>
    
    </th>
  </tr>
    <?php
    
   if ($tanuloIdk) {
    $sor = 0;
    foreach($tanuloIdk as $row) {
        $tanulo->set_user($row, $conn);
        if($tanulo->get_sor() != $sor){
          if($sor != 0) echo '</tr>';
          echo '<tr>';
          $sor = $tanulo->get_sor();
        }
        if(!$tanulo->get_nev()) echo '<td class="empty"></td>';
        else{
          $plusz = '';
          if(in_array($row, $hianyzok)) $plusz.= ' class="missing"';
          if($row == $en) $plusz.= ' id="me"';
         if($row == $tanar) $plusz.= ' class="tanar" colspan="2"';
          echo "<td".$plusz.">" . $tanulo->get_nev();
          if(!empty($_SESSION['id'])){
            if(in_array($_SESSION['id'],$adminok)){
          if(in_array($row, $hianyzok)) echo '<br><a href="index.php?page=ulesrend&nem_hianyzo='.$row.'">Nem hiányzó</a>';
            }
          }
          echo "</td>";
        }
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    
    if(isset($_FILES["fileToUpload"])){
      $target_dir = "profilkepek/";
      
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      if (@move_uploaded_file($_FILES["fileToUpload"]["tmp_name"] , $target_file)){
          echo "Profilkép feltöltve.";
      }
      }
    ?> 
       
    </table>
    <form action="index.php?page=ulesrend" method="post" enctype="multipart/form-data">
       <br>Profilkép kiválasztása:
        <input type="file" name = "fileToUpload" id = "fileToUpload">
        <input type ="submit" value ="Upload Image" name="submit">
    </form>
    
            <img src= <?php echo"$target_file " ?> >
          
    </body>
<html>