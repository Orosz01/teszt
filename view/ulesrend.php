
  <table>
  <tr>
   <th colspan="3"> 
     <?php
      echo 'Ülésrend';
?>
    </th>
    <th colspan="5">Hiányzás: 
      <?php
      if(!empty($_SESSION['id'])){
        if(in_array($_SESSION['id'],$adminok)){
          ?>
    <form action="ulesrend.php" method="post">
    
    <select name="hianyzo_id">
      <?php

      $result = tanlista($conn);
      
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $tanulo->set_user($row['id'], $conn);
         if($tanulo->get_nev() and !in_array($row['id'],$hianyzok))echo '<option value="'.$row['id'].'">'.$tanulo->get_nev().'</option>';
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
    $sql = "SELECT id,nev,sor,oszlop From ulesrend";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      $sor = 0;
      while($row = $result->fetch_assoc()) {
        $tanulo->set_user($row['id'], $conn);
        if($tanulo->get_sor() != $sor){
          if($sor != 0) echo '</tr>';
          echo '<tr>';
          $sor = $tanulo->get_sor();
        }
        if(!$tanulo->get_nev()) echo '<td class="empty"></td>';
        else{
          $plusz = '';
          if(in_array($row["id"], $hianyzok)) $plusz.= ' class="missing"';
          if($row["id"] == $en) $plusz.= ' id="me"';
          if($row["id"] == $tanar) $plusz.= ' class="tanar" colspan="2"';
          echo "<td".$plusz.">" . $row["nev"];
          if(!empty($_SESSION['id'])){
            if(in_array($_SESSION['id'],$adminok)){
          if(in_array($row["id"], $hianyzok)) echo '<br><a href="ulesrend.php?nem_hianyzo='.$row["id"].'">Nem hiányzó</a>';
            }
          }
          echo "</td>";
        }
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
    </table>
</body>
<html>