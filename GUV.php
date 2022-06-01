<!DOCTYPE html>
<html>
<head>
	
<title>G&V</title> 
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" type="text/css" href="dashboard-css.css">
<link rel="stylesheet" type="text/css" href="font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="w3-4-15.css">
	
<style>
</style>
	
</head>
	
<body>
	<div class="hero-image">
		<center>
		<br>
		<a class="sansserif" href="https://localhost/crnerp/index.htm" target="_self">Home</a>
		<a class="sansserif" href="https://localhost/crnerp/dashboard.php" target="_self">Dashboard</a>
		<a class="sansserif" href="https://localhost/crnerp/Lieferanten.php" target="_self">Lieferanten</a> 
		<a class="sansserif" href="https://localhost/crnerp/Artikel.php" target="_self">Artikel</a>
	    <a class="sansserif" href="https://localhost/crnerp/GUV.php" target="_self">GUV</a>	
			
<div class="row">
	   <div class="col-2 col-s-12 menu">
	 	 
			<div class="list">
				<br><br>
    			<ul>
     			 	<li>Buchungen einfügen</li>
					<li>Buchungen suchen</li>
     			 	<li>Buchungen bearbeiten</li>
					<li>Buchungen zubuchen</li>
     			 	<li>Buchungen löschen</li>
	  			 	
   				</ul>
		  	</div>
		  
  		</div>
			
			
	
		<div class="col-10 col-s-12 menu">
			<div class="container_2">
				<center>
				<h1 class="sansserif">Cashflow</h1>
				<p class="sansserif">Abfrage: <?php echo date("d.m.Y H:i:s");?></p>
				</center>
			</div>
			<br>


			

<?php

/// CONNECT TO DATABASE
$hostname="localhost"; //// specify host, i.e. 'localhost'
$user="root"; //// specify username
$pass=""; //// specify password
$dbase="crnerp_v04"; //// specify database name
$db_link = new mysqli($hostname, $user, $pass, $dbase);
	if ($db_link->connect_error) {
	die("Connection failed: " . $db_link->connect_error);
	}



			// Berehnung Einnahmen 2020
			 $sql2020Ein = "SELECT SUM(Betrag) AS summe FROM postbank_buchungen WHERE Aus_Ein='Einnahmen'AND Jahr='2020'" ;
			 $result2020Ein = mysqli_query($db_link, $sql2020Ein);
					  
					  if (mysqli_num_rows($result2020Ein) > 0) {
						  // output data of each row
						  while($row2020Ein = mysqli_fetch_assoc($result2020Ein)) {
							  $total2020Ein =  $row2020Ein["summe"];
						  }
					  } else {
						  echo "0 results";
						}	



			// Berehnung Auszahlungen 2020
			$sql2020Aus = "SELECT SUM(Betrag) AS summe FROM postbank_buchungen WHERE Aus_Ein='Ausgaben'AND Jahr='2020'" ;
			$result2020Aus = mysqli_query($db_link, $sql2020Aus);
								 
								 if (mysqli_num_rows($result2020Aus) > 0) {
									 // output data of each row
									 while($row2020Aus = mysqli_fetch_assoc($result2020Aus)) {
										 $total2020Aus =  $row2020Aus["summe"];
									 }
								 } else {
									 echo "0 results";
			   }	

			


			// Berehnung Ergebnis ges 2020
			$sql2020Erg = "SELECT SUM(Betrag) AS summe FROM postbank_buchungen WHERE Jahr='2020'" ;
			$result2020Erg = mysqli_query($db_link, $sql2020Erg);
									
				if (mysqli_num_rows($result2020Erg) > 0) {
				// output data of each row
				while($row2020Erg = mysqli_fetch_assoc($result2020Erg)) {
				$total2020Erg =  $row2020Erg["summe"];
				}
				} else {
				echo "0 results";
			}




?>




			<div class="table_container" style="overflow-x:auto;">	

<?php


$qry_cashflow = "SELECT * FROM kategorien_cashflow_2020_2021";

$result_cashflow = $db_link->query($qry_cashflow);



echo "<table id=customers border='1'>

<tr>
<th></th>
<th>Kategorie</th>
<th>2020</th>
<th>2021</th>
<th>01 2021</th>
<th>02 2021</th>
<th>03 2021</th>
<th>04 2021</th>
<th>05 2021</th>
<th>06 2021</th>
<th>07 2021</th>
<th>08 2021</th>
<th>09 2021</th>
<th>10 2021</th>
<th>11 2021</th>
<th>12 2021</th>


</tr>";


if ($result_cashflow->num_rows > 0) {
	// output data of each row

while($rowval_cashflow = $result_cashflow->fetch_assoc())
	
  {

  echo "<tr>";
  
  echo "<td></td>";

  echo "<td>" . $rowval_cashflow['Kategorie'] . "</td>";

  echo "<td>" . $rowval_cashflow['Betrag_2020'] . "</td>";
  
  echo "<td>" . $rowval_cashflow['Betrag_2021'] . "</td>";

  echo "<td>" . $rowval_cashflow['Betrag_01_2021'] . "</td>";

  echo "<td>" . $rowval_cashflow['Betrag_02_2021'] . "</td>";

  echo "<td>" . $rowval_cashflow['Betrag_03_2021'] . "</td>";

  echo "<td>" . $rowval_cashflow['Betrag_04_2021'] . "</td>";

  echo "<td>" . $rowval_cashflow['Betrag_05_2021'] . "</td>";

  echo "<td>" . $rowval_cashflow['Betrag_06_2021'] . "</td>";

  echo "<td>" . $rowval_cashflow['Betrag_07_2021'] . "</td>";

  echo "<td>" . $rowval_cashflow['Betrag_08_2021'] . "</td>";

  echo "<td>" . $rowval_cashflow['Betrag_09_2021'] . "</td>";

  echo "<td>" . $rowval_cashflow['Betrag_10_2021'] . "</td>";

  echo "<td>" . $rowval_cashflow['Betrag_11_2021'] . "</td>";

  echo "<td>" . $rowval_cashflow['Betrag_12_2021'] . "</td>";

  
  
  
}
} else {
	echo "0 results";
	}  
	echo "<tr>";
	echo " <td></td><td>Summe Ausgaben</td><td>$total2020Aus</td><td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>";
	echo "<tr>";
	echo " <td></td><td>Summe Einnahmen</td><td>$total2020Ein</td><td></td><td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>";
	echo "<tr>";
	echo " <td></td><td>Summe Gesamt</td><td>$total2020Erg</td><td></td><td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>";
	echo "<tr>";
	echo " <td></td><td></td><td></td><td></td><td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>";



	// closeing table tag
echo "</table>";

?>




		</div>
		<br>



			<div class="container_2">
				<center>
				<h1 class="sansserif">2020</h1>
				<p class="sansserif">Abfrage: <?php echo date("d.m.Y H:i:s");?></p>
				</center>
			</div>
	


			<div class="table_container" style="overflow-x:auto;">	

<?php


$qry2020="SELECT * FROM ein_aus_ges_monate_2020";

$result2020 = $db_link->query($qry2020);



echo "<table id=customers border='1'>

<tr>
<th></th>
<th>Monat</th>
<th>Einnahmen</th>
<th>Ausgaben</th>
<th>Gesamt</th>
</tr>";


if ($result2020->num_rows > 0) {
	// output data of each row

while($rowval2020 = $result2020->fetch_assoc())
	
  {

  echo "<tr>";
  
  echo "<td></td>";

  echo "<td>" . $rowval2020['Monat_Ein_Aus'] . "</td>";

  echo "<td>" . $rowval2020['Einnahmen'] . "</td>";
  
  echo "<td>" . $rowval2020['Ausgaben'] . "</td>";

  echo "<td>" . $rowval2020['Summe'] . "</td>";

  
}
} else {
	echo "0 results";
	}  

	//Summe Einnahmen 2020
	$qry_summe_Ein_2020="SELECT SUM(Einnahmen) FROM ein_aus_ges_monate_2020";
	$Summe_Ein_2020 = $db_link->query($qry_summe_Ein_2020);

	if ($Summe_Ein_2020->num_rows > 0) {
		// output data of each row

	$Row_Summe_Ein_2020 = $Summe_Ein_2020->fetch_array();
	
	} else {
	echo "0 results";
	}  

	//Summe Ausgaben 2020
	$qry_summe_Aus_2020="SELECT SUM(Ausgaben) FROM ein_aus_ges_monate_2020";
	$Summe_Aus_2020 = $db_link->query($qry_summe_Aus_2020);

	if ($Summe_Aus_2020->num_rows > 0) {
		// output data of each row

	$Row_Summe_Aus_2020 = $Summe_Aus_2020->fetch_array();
	
	} else {
	echo "0 results";
	} 

	//Summe Gesamt 2020
	$qry_summe_Ges_2020="SELECT SUM(Summe) FROM ein_aus_ges_monate_2020";
	$Summe_Ges_2020 = $db_link->query($qry_summe_Ges_2020);

	if ($Summe_Ges_2020->num_rows > 0) {
		// output data of each row

	$Row_Summe_Ges_2020 = $Summe_Ges_2020->fetch_array();
	
	} else {
	echo "0 results";
	} 


	
  echo "<tr>";
  echo "<td></td>";
  echo "<td>Summe</td>";
  echo "<td>$Row_Summe_Ein_2020[0]</td>";
  echo "<td>$Row_Summe_Aus_2020[0]</td>";
  echo "<td>$Row_Summe_Ges_2020[0]</td>";

  echo "<tr>";
  
  echo "<td></td>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td></td>";

// closeing table tag
echo "</table>";

?>



		</div>
		<br>


		
		<div class="container_2">
				<center>
				<h1 class="sansserif">2021</h1>
				<p class="sansserif">Abfrage: <?php echo date("d.m.Y H:i:s");?></p>
				</center>
			</div>

			<div class="table_container" style="overflow-x:auto;">	

<?php


$qry2021="SELECT * FROM ein_aus_ges_monate_2021";

$result2021 = $db_link->query($qry2021);



echo "<table id=customers border='1'>

<tr>
<th></th>
<th>Monat</th>
<th>Einnahmen</th>
<th>Ausgaben</th>
<th>Gesamt</th>
</tr>";


if ($result2021->num_rows > 0) {
	// output data of each row

while($rowval2021 = $result2021->fetch_assoc())
	
  {

  echo "<tr>";
  
  echo "<td></td>";

  echo "<td>" . $rowval2021['Monat_Ein_Aus'] . "</td>";

  echo "<td>" . $rowval2021['Einnahmen'] . "</td>";
  
  echo "<td>" . $rowval2021['Ausgaben'] . "</td>";

  echo "<td>" . $rowval2021['Monats_Summe'] . "</td>";

  
}
} else {
	echo "0 results";
	}  

	$qry_summe_Ein_2021="SELECT SUM(Einnahmen) FROM ein_aus_ges_monate_2021";
	$Summe_Ein_2021 = $db_link->query($qry_summe_Ein_2021);

	if ($Summe_Ein_2021->num_rows > 0) {
		// output data of each row

	$Row_Summe_Ein_2021 = $Summe_Ein_2021->fetch_array();
	
	} else {
	echo "0 results";
	}  


	$qry_summe_Aus_2021="SELECT SUM(Ausgaben) FROM ein_aus_ges_monate_2021";
	$Summe_Aus_2021 = $db_link->query($qry_summe_Aus_2021);

	if ($Summe_Aus_2021->num_rows > 0) {
		// output data of each row

	$Row_Summe_Aus_2021 = $Summe_Aus_2021->fetch_array();
	
	} else {
	echo "0 results";
	} 

	$qry_summe_Ges_2021="SELECT SUM(Monats_Summe) FROM ein_aus_ges_monate_2021";
	$Summe_Ges_2021 = $db_link->query($qry_summe_Ges_2021);

	if ($Summe_Ges_2021->num_rows > 0) {
		// output data of each row

	$Row_Summe_Ges_2021 = $Summe_Ges_2021->fetch_array();
	
	} else {
	echo "0 results";
	} 


	
  echo "<tr>";
  echo "<td></td>";
  echo "<td>Summe</td>";
  echo "<td>$Row_Summe_Ein_2021[0]</td>";
  echo "<td>$Row_Summe_Aus_2021[0]</td>";
  echo "<td>$Row_Summe_Ges_2021[0]</td>";

  echo "<tr>";
  
  echo "<td></td>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td></td>";
  echo "<td></td>";

// closeing table tag
echo "</table>";

?>



		</div>
		<br>





			<div class="container_2">
				<center>
				<h1 class="sansserif">Buchungen</h1>
				<p class="sansserif">Abfrage: <?php echo date("d.m.Y H:i:s");?></p>
				</center>
			</div>
	
			
	  		<div>
				  <center>
					  <div class="data">
						<select name="Kategorie">
							<option>Umsatz</option>
							<option>Material</option>
							<option>Miete</option>
							<option>Miete NK</option>
							<option>Lohn</option>
							<option>Lohn NK</option>
							<option>Lohnfertigung</option>
							<option>Werkzeuge</option>
							<option>Büro</option>
							<option>Software</option>
							<option>Beratung</option>
							<option>Internen</option>
							
							
							
						</select>

						<select name="Jahr">
							<option>2020</option>
							<option>2021</option>
							<option>2022</option>
							<option>2023</option>
							<option>2024</option>
						</select>

						<select name="Monat">
							<option>01</option>
							<option>02</option>
							<option>03</option>
							<option>04</option>
							<option>05</option>
							<option>06</option>
							<option>07</option>
							<option>08</option>
							<option>09</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>


						</select>

	  					<input type="submit" name="submit" class="submit"></input>
					  </div>


			  </div>




	
			<div class="table_container" style="overflow-x:auto;">	



<?php


$qry="SELECT * FROM postbank_buchungen";

$result02 = $db_link->query($qry);





echo "<table id=customers border='1'>

<tr>

<th></th>
<th>ID</th>
<th>Buchungstag</th>
<th>Umsatzart</th>
<th>Auftraggeber</th>
<th>Empfänger alle</th>
<th>Betrag (€)</th>
<th>Aus / Ein</th>
<th>Kategorie</th>
</tr>";


if ($result02->num_rows > 0) {
	// output data of each row

while($rowval = $result02->fetch_assoc())
	
  {

  echo "<tr>";
  
  echo "<td></td>";

  echo "<td>" . $rowval['buchungen_ID'] . "</td>";
  
  echo "<td>" . $rowval['Buchungstag'] . "</td>";
   
  echo "<td>" . $rowval['Umsatzart'] . "</td>";

  echo "<td>" . $rowval['Auftraggeber'] . "</td>";

  echo "<td>" . $rowval['Empfaenger_alle'] . "</td>";

  echo "<td>" . $rowval['Betrag'] . "</td>";

  echo "<td>" . $rowval['Aus_Ein'] . "</td>";

  echo "<td>" . $rowval['Kategorie'] . "</td>";


  echo "</tr>";


}
} else {
	echo "0 results";
	}

// closeing table tag
echo "</table>";



?>
				</div>
			</div>
		</div>
	
	</center>
		
	</div>
</div>
</body>
</html>