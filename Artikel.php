<!DOCTYPE html>
<html>
<head>
	
<title>Artikel</title> 
	
<meta name="viewport" content="width=device-width, charset=UTF-8, initial-scale=1.0">
	
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
		<a class="sansserif" href="index.htm" target="_self">Home</a>
		<a class="sansserif" href="dashboard.php" target="_self">Dashboard</a>
		<a class="sansserif" href="Lieferanten.php" target="_self">Lieferanten</a> 
		<a class="sansserif" href="Artikel.php" target="_self">Artikel</a>
		<a class="sansserif" href="GUV.php" target="_self">GUV</a>	
			
<div class="row">
	   <div class="col-2 col-s-12 menu">
	 	 
			<div class="list">
				<br><br>
    			<ul>
     			 	<li>Artikel anlegen</li>
					<li>Artike suchen</li>
     			 	<li>Artikel bearbeiten</li>
					<li>Artikel zubuchen</li>
     			 	<li>Artikel ausbuchen</li>
	  			 	<li>Artikel löschen</li>
   				</ul>
		  	</div>
		  
  		</div>
			
			
	
		<div class="col-10 col-s-12 menu">
			<div class="container_2">
				<center>
				<h1 class="sansserif">Übersicht Teile</h1>
				<p class="sansserif">Abfrage: <?php echo date("d.m.Y H:i:s");?></p>
				</center>
			</div>
	
	
			<div class="table_container" style="overflow-x:auto;">	

<?php

/// CONNECT TO DATABASE
require_once ('konfiguration.php');
$db_link = new mysqli($hostname, $user, $pass, $dbase);

/// UTF8 für Umlaute
mysqli_set_charset($db_link, 'utf8');

///Display error if connection failed
if ($db_link->connect_error) {
    die("Connection failed: " . $db_link->connect_error);
}

/// Abfrage aller Datensätze der Tabelle Artikel
$qry="SELECT ID, Artikel, Lieferant, Einzelpreis3, Lagerbestand FROM artikel";

$result = $db_link -> query($qry);
if ( ! $result )
{
  die('Ungültige Abfrage: ' . error());
}


echo "<table id=customers border='1'>

<tr>

<th></th>
<th>ID</th>
<th>Artikel</th>
<th>Lieferant</th>
<th>Einzelpreis</th>
<th>Lagerbestand</th>
<th>Gesamtpreis</th>
</tr>";


// declare variable to store the Bestand addition in the while loop
$bestand = 0;

// declare variable to store the price addition in the while loop
$preis = 0;

// declare variable to store the total price addition in the while loop
$summe_gesamtpreis = 0;

while($rowval = $result -> fetch_array(MYSQLI_ASSOC))
	
  {

  echo "<tr>";
  
  echo "<td></td>";

  echo "<td>" . $rowval['ID'] . "</td>";

  echo "<td>" . $rowval['Artikel'] . "</td>";
  
  echo "<td>" . $rowval['Lieferant'] . "</td>";

  echo "<td>" . $rowval['Einzelpreis3'] . "</td>";
  
  echo "<td>" . $rowval['Lagerbestand'] . "</td>";

  // declare variable to store the price addition in the while loop
  $gesamtpreis = $rowval['Einzelpreis3'] * $rowval['Lagerbestand'];
	
  echo "<td>" . $gesamtpreis . "</td>";

  echo "</tr>";


// add the bestand to the total
   $bestand += $rowval['Lagerbestand'];
	
// add the price to the total
   $preis += $rowval['Einzelpreis3'];
	

	
$summe_gesamtpreis += $rowval['Lagerbestand'] * $rowval['Einzelpreis3'];

}

// add a last row to display only the total price in the last column
echo "<tr><td></td><td></td><td></td><td></td><td>$preis</td><td>$bestand</td><td>$summe_gesamtpreis</td><tr>";

// closeing table tag
echo "</table>";

?>
				</div>
			</div>
		</div>
	
	</center>
		
	</div>
	
</body>
</html>