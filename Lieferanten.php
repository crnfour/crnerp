<!DOCTYPE html>
<html> 
<head>
	
<title>Lieferanten</title> 	
	
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
     			 	<li><a class="sansserif" href="https://localhost/crnerp/Lieferanten-erstellen-form.php" target>Lieferanten anlegen</a></li>
					<li>Lieferanten suchen</li>
     			 	<li><a class="sansserif"> <input type="submit" name="bearbeiten" formaction="Lieferanten-bearbeiten-form.php" value="Lieferanten bearbeiten"> </a></li>
     			 	<li>Lieferanten löschen</li>
	  			 	<li>...</li>
   				</ul>
		  	</div>
		  
  		</div>

	
		<div class="col-10 col-s-12 menu">
				
				<div class="container_2">
				<h1 class="sansserif">Übersicht Lieferanten</h1>
				</div> 
	
				<div class="table_container" style="overflow-x:auto;">	
		
	
<?php
/// CONNECT TO DATABASE
require_once ('konfiguration.php');
$db_link = new mysqli($hostname, $user, $pass, $dbase);

/// UTF8 für Umlaute
mysqli_set_charset($db_link, 'utf8');
if ($db_link->connect_error) {
    die("Connection failed: " . $db_link->connect_error);
}
?>


<?php
$sql = "SELECT * FROM lieferanten";
 
$db_erg =  $db_link -> query($sql);
if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . error());
}
 
echo '<table border="1">';
while ($zeile = $db_erg -> fetch_array( MYSQLI_ASSOC))
{
  echo "<tr>";
  $id = $zeile["ID"];
  echo "<td> <input type= 'radio' name='auswahl' value='$id'> </td>";
  echo "<td>". $zeile['ID'] . "</td>";
  echo "<td>". $zeile['L_Name'] . "</td>";
  echo "<td>". $zeile['Website'] . "</td>";
  echo "<td>". $zeile['Produkte'] . "</td>";	
  echo "<td>". $zeile['Ansprechpartner'] . "</td>";
  echo "<td>". $zeile['Email'] . "</td>";
  echo "<td>". $zeile['Strasse'] . "</td>";
  echo "<td>". $zeile['Hausnummer'] . "</td>";
  echo "<td>". $zeile['PLZ'] . "</td>";
  echo "<td>". $zeile['Ort'] . "</td>";
  echo "<td>". $zeile['Telefon'] . "</td>";
  echo "</tr>";
}
echo "</table>";
 
mysqli_free_result( $db_erg );


?>		
				
				</div>		
			</div>
		</div>
		</center>
	</div>
</body>
</html>
