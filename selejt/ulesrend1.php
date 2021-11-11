<!DOCTYPE html>
<html>
	<head>
		<title>Ülésrend</title>
		<link rel="stylesheet" href="osztaly.css">
		<style>
			table{
				border:3px solid red;
				background-color:lightgreen;
			}
			td, th {
				border: 2.5px solid orange;
				text-align: center;
				padding:7px;
				width:100px;
				color:#123fdc;
				}
			#zero{
				border:none;
				}
		</style>
	</head>
	<?php
		$osztaly =	array(
				array("Kulhanek László István"),
				array("Molnár Gergő Máté","Bagcsányi Dominik","Füstös Lóránt","Orosz Zsolt","Harsányi László Ferenc"),
				array("Keresztúri Kevin","Juhász Levente","Szabó László","Sütő Dániel","Détári Klaudia"),
				array("Fazekas Miklós Adrián","Szabad gép","Gombos János","Tanári gép")
				
		);	
	?>
	<body>
		<table>
			<?php
				foreach($osztaly as $tomb){
						echo '<tr>';
					foreach ($tomb as $tanulo){
						echo '<td>'.$tanulo.'</td>';
					}
				}
			?>
			<tr>
				<td><?php echo $osztaly[0][0] ?></td>
			</tr>
			<tr>
				<td><?php echo $osztaly[1][0] ?></td>
				<td id="zero"></td>
				<td><?php echo $osztaly[1][1] ?></td>
				<td><?php echo $osztaly[1][2] ?></td>
				<td id="zero"></td>
				<td><?php echo $osztaly[1][3] ?></td>
				<td><?php echo $osztaly[1][4] ?></td>
			</tr>
			<tr>
			</tr>
			<tr>
				<td><?php echo $osztaly[2][0] ?></td>
				<td id="zero"></td>
				<td><?php echo $osztaly[2][1] ?></td>
				<td><?php echo $osztaly[2][2] ?></td>
				<td id="zero"></td>
				<td><?php echo $osztaly[2][3] ?></td>
				<td><?php echo $osztaly[2][4] ?></td>
			</tr>
			<tr>
				<td><?php echo $osztaly[3][0] ?></td>
				<td id="zero"> </td> 
				<td><?php echo $osztaly[3][1] ?></td>
				<td><?php echo $osztaly[3][2] ?></td>
				<td id="zero"></td>
				<td><?php echo $osztaly[3][3] ?></td>
			</tr>	
		</table>    
	</body>
</html>