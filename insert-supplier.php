<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
<meta charset="UTF-8"> 

<title>Insert Supplyer</title>
	
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<link rel="stylesheet" type="text/css" href="dashboard-css.css">
		<link rel="stylesheet" type="text/css" href="font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="w3-4-15.css">
	
		<style type="text/css">

		
	.sansserif {
  font-family: Verdana, Arial, Helvetica, sans-serif;
}
	
		
	body {
		color: #ffffff;
		background-color: #eaecee; 	
	}
.container {

      width: 80%;
      height: 50%;
      background-color: #000000  ; 
	  border: 10px solid  #ffffff ;
      border-radius: 16px;
	  padding: 10px;
      margin: 10px;
	  display: flex;
      justify-content: center;
	  align-items: center;
	  
	}
		
 .centered_element { 
	  float: left;
	  width: 30%;
      height: 20%;
      background-color: #ffffff  ; 
	  border: 10px solid  #000000 
      border-radius: 16px;
	  padding: 10px;
      margin: 10px;
	 
	}
	a {
  		color: #424242;
		padding-right: 10px;
		word-spacing: norman;
	}

	table, th, td {
  
		border: 1px solid #ddd;
		
  		text-align: left;
        }
	table {
       border-collapse: collapse;
	   border-radius: 2em
       width: 80%;
       }
	 th, td {
 	   padding: 15px;
	}
		
  </style>
	
</head>
<body>
	
<div class=hero-image>
	
<center><br><br>
	<div class=container>

<?php

$l_name = $_POST['l_name'];
$website = $_POST['website'];
$produkte = $_POST['produkte'];
$ansprechpartner = $_POST['ansprechpartner'];
$email = $_POST['email'];
$strasse = $_POST['strasse'];
$hausnummer = $_POST['hausnummer'];
$plz = $_POST['plz'];
$ort = $_POST['ort'];
$telefon = $_POST['telefon'];


/// CONNECT TO DATABASE
require_once ('konfiguration.php');
$db_link = new mysqli($hostname, $user, $pass, $dbase);

/// UTF8 für Umlaute
mysqli_set_charset($db_link, 'utf8');
if ($db_link->connect_error) {
    die("Connection failed: " . $db_link->connect_error);
}

$sql = "INSERT INTO lieferanten (L_Name, Website, Produkte, Ansprechpartner, Email, Strasse, Hausnummer, PLZ, Ort, Telefon) VALUES ( '$l_name', '$website', '$produkte', '$ansprechpartner', '$email', '$strasse', '$hausnummer', '$plz', '$ort', '$telefon')";

if ($db_link->query($sql) === TRUE) {
  echo "Neuer Lieferant erfolgreich angelegt: ";
} 
else {
  echo "Error: " . $sql . "<br>" . $db_link->error;
}

$db_link->close();

?>
		<br>
		<div><center>
		<p><a class="sansserif" href="Lieferanten.php" style="color:white" target> Zurück zu Lieferanten</p></a> 
		
		</center>
		</div>
		
	</div>
		
	</center>
		<br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br>
	</div>

</body>
</html>

	