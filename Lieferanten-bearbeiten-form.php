<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  

<title>Lieferanten bearbeiten</title>
	
	
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
				<br> <br>
		<center>
		<a class="sansserif" href="https://localhost/crnerp/Lieferanten.php" target="_self">Lieferanten</a> 
		<a class="sansserif" href="https://localhost/crnerp/Artikel.php" target="_self">Artikel</a>
		<a class="sansserif" href="https://localhost/crnerp/GUV.php" target="_self">GUV</a>	
		</center>	
        

        <?php

        /// 1. CONNECT TO DATABASE
        require_once ('konfiguration.php');
        $db_link = new mysqli($hostname, $user, $pass, $dbase);

        /// UTF8 für Umlaute
        mysqli_set_charset($db_link, 'utf8');
        if ($db_link->connect_error) {
            die("Connection failed: " . $db_link->connect_error);
        }

        
        // 2. Prüfe Radio-Button-Auswahl
        if(isset($_POST["auswahl"])){

            // 3. Datenbankabfrage starten
            $id = $_POST["auswahl"];
            $abfrage = "SELECT * FROM lieferanten WHERE ID = $id";
            $result = mysqli_query( $db_link, $abfrage);

            // 4. Datensatz in Variablen speichern
            $dsatz = mysqli_fetch_assoc($result);
            


            $l_name = $dsatz['l_name'];  
            
            echo " $l_name ";

            $website = $dsatz['website'];
            $produkte = $dsatz['produkte'];
            $ansprechpartner = $dsatz['ansprechpartner'];
            $email = $dsatz['email'];
            $strasse = $dsatz['strasse'];
            $hausnummer = $dsatz['hausnummer'];
            $plz = $dsatz['plz'];
            $ort = $dsatz['ort'];
            $telefon = $dsatz['telefon'];

        

            // 5. Das Bearbeiten-Formular anzeigen
            echo "<center><br><br>";
            echo "<div class=container>";
            echo "<form action='Lieferanten-bearbeiten-form.php' method='post'>";
            echo "<input name='id' type='hidden' value='$id'>";

            echo "<p><input name='ID' value='$id'> ID</p>";

            echo "<p><input name='l_name' value='$l_name'> Lieferanten Name</p>";
            echo "<p><input name='website' value='$website'> Website</p>";
            echo "<p><input name='produkte' value='$produkte'> Produkte</p>";
            echo "<p><input name='ansprechpartner' value='$ansprechpartner'> Anprechpartner</p>";
            echo "<p><input name='email' value='$email'> E-Mail</p>";
            echo "<p><input name='strasse' value='$strasse'> Strasse</p>";
            echo "<p><input name='hausnummer' value='$hausnummer'> Hausnummer</p>";
            echo "<p><input name='plz' value='$plz'> PLZ</p>";
            echo "<p><input name='ort' value='$ort'> Ort</p>";
            echo "<p><input name='telefon' value='$telefon'> Telefon</p>";
            echo "<input name='bearbeitungAbschicken' value='Bearbeitung abschließen' type='submit'>";
            echo "</form>";
        
            echo "<a href='lieferanten.php'>zurück zur Übersicht</a>";
        }

        //6. Datensatz aktualisieren mit UPDATE
        if(isset($_POST["bearbeitungAbschicken"])){
            $id = $_POST["id"];
            $l_name = $_POST["l_name"];
            $website = $_POST['website'];
            $produkte = $_POST['produkte'];
            $ansprechpartner = $_POST['ansprechpartner'];
            $email = $_POST['email'];
            $strasse = $_POST['strasse'];
            $hausnummer = $_POST['hausnummer'];
            $plz = $_POST['plz'];
            $ort = $_POST['ort'];
            $telefon = $_POST['telefon'];
        
        //String für Update-Anweisung erstellen
        $update = "UPDATE lieferanten SET
        l_name ='$l_name',
        website ='$website',
        produkte ='$produkte',
        ansprechpartner ='$ansprechpartner'
        email ='$email',
        strasse ='$strasse',
        hausnumer ='$hausnummer',
        plz ='$plz',
        ort ='$ort',
        telefon ='$telefon',
        WHERE id = $id";

        //MySQL-Anweisung ausführen
            mysqli_query($db_link, $update);

            echo "Datensatz bearbeitet.<br>";
            echo "<a href='lieferanten.php'>zurück zur Übersicht</a>";
        }

        //Wenn der Nutzer in Lieferanten.php keine Auswahl getroffen hat:
        if(!isset($_POST["auswahl"]) && !isset($_POST["bearbeitungAbschicken"])){
        echo "Es wurde kein Datensatz ausgewählt.<br>";
        echo "<a href='lieferanten.php'>zurück zur Übersicht</a>";
}


        $db_link->close();

        ?>


            <br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br>
        </div>
	</body>
</html>