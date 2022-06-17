<!DOCTYPE html>
<html> 
<head>
	
<title>Lieferanten geloescht</title> 	
	
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
							<li><a class="sansserif" href="https://localhost/crnerp/Lieferanten-bearbeiten.php" target>Lieferanten bearbeiten</a> </li>
							<li><a class="sansserif" href="https://localhost/crnerp/Lieferanten-loeschen.php" target>Lieferanten löschen</a></li>
							<li>...</li>
						</ul>
					</div>				
				</div>
			
				<div class="col-10 col-s-12 menu">	
					<div class="container_2">
						<h1 class="sansserif">Lieferanten gelöscht</h1>
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
					
						//Ausgewählte Datensätze löschen:
						for($i=6000000; $i<=6009999; $i++){
							if(isset($_POST["auswahl$i"])){
								$deleteAnweisung = "DELETE FROM lieferanten WHERE ID=$i";
								$result = mysqli_query($db_link, $deleteAnweisung);
								echo "Datensatz mit der ID $i wurde gelöscht. <br>";
							}
						}

						?>	
						<p></p>
						<center>
						<p><a href="Lieferanten.php">Zurück zur Übersicht <br></a></p>
						</center>
						
					</div>	

			
					<br><br><br><br><br><br><br><br><br><br><br><br>
					<br><br><br><br><br><br><br><br><br><br><br><br>
					<br><br><br><br><br><br><br>
			</div>

		


		</div>
		</center>



	</div>

</body>
</html>
