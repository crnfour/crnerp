<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
<meta charset="UTF-8"> 

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


.container_left {

    width: 50%;
    height: 50%;
    background-color: #000000  ; 
    border: 10px solid  #ffffff ;
    border-radius: 16px;
    padding: 10px;
    margin: 10px;
    display: flex;
    justify-content: left;
    align-items: left;
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
		<a class="sansserif" href="Lieferanten.php" target="_self">Lieferanten</a> 
		<a class="sansserif" href="Artikel.php" target="_self">Artikel</a>
		<a class="sansserif" href="GUV.php" target="_self">GUV</a>	
		</center>	

        <div class="row">

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
        if(isset($_POST["auswahl"]))
            {

            // 3. Datenbankabfrage starten
            $id = $_POST["auswahl"];
            $abfrage = "SELECT * FROM lieferanten WHERE ID = $id";
            $result = $db_link -> query( $abfrage);
       

            // Undefined index set as blank
            $l_name = isset($_POST['auswahl']) ? $_POST['auswahl'] : '';

            // 4. Datensatz in Variablen speichern
            $dsatz = $result -> fetch_array(MYSQLI_ASSOC);
            $l_name = $dsatz['L_Name'];  
            $website = $dsatz['Website'];
            $produkte = $dsatz['Produkte'];
            $ansprechpartner = $dsatz['Ansprechpartner'];
            $email = $dsatz['Email'];
            $strasse = $dsatz['Strasse'];
            $hausnummer = $dsatz['Hausnummer'];
            $plz = $dsatz['PLZ'];
            $ort = $dsatz['Ort'];
            $telefon = $dsatz['Telefon'];

        

            // 5. Das Bearbeiten-Formular anzeigen
            
            echo "<div class=container>";
            echo "<div class=container_left>";
            echo "<form action='Lieferanten-update-form.php' method='post'>";
            echo "<input name='id' type='hidden' value='$id'>";
            echo "<p><tr><input name='l_name' value='$l_name'> Lieferanten Name</tr></p>";
            echo "<p><tr><input name='website' value='$website'> Website</tr></p>";
            echo "<p><tr><input name='produkte' value='$produkte'> Produkte</tr></p>";
            echo "<p><tr><input name='ansprechpartner' value='$ansprechpartner'> Anprechpartner</tr></p>";
            echo "<p><input name='email' value='$email'> E-Mail</p>";
            echo "<p><input name='strasse' value='$strasse'> Strasse</p>";
            echo "<p><input name='hausnummer' value='$hausnummer'> Hausnummer</p>";
            echo "<p><input name='plz' value='$plz'> PLZ</p>";
            echo "<p><input name='ort' value='$ort'> Ort</p>";
            echo "<p><input name='telefon' value='$telefon'> Telefon</p>";
            echo "<input name='bearbeitungAbschicken' value='Bearbeitung abschließen' type='submit'>";
            echo "</form>";
            echo "<br><br>";
            echo "<a href='Lieferanten.php'>zurück zur Übersicht</a>";
            }




        //6. Datensatz aktualisieren mit UPDATE
        if(isset($_POST["bearbeitungAbschicken"]))
            {
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
            L_Name ='$l_name',
            Website ='$website',
            Produkte ='$produkte',
            Ansprechpartner ='$ansprechpartner',
            Email ='$email',
            Strasse ='$strasse',
            Hausnummer ='$hausnummer',
            PLZ ='$plz',
            Ort ='$ort',
            Telefon ='$telefon'
            WHERE ID = $id";

            //MySQL-Anweisung ausführen
                $updatecheck =  mysqli_query($db_link, $update);

                if ( ! $updatecheck )
						{
						die('Ungültige Abfrage: ' );
						}

                echo "Datensatz bearbeitet.<br>";
                echo "<a href='Lieferanten.php'>zurück zur Übersicht</a>";
            }

        //Wenn der Nutzer in Lieferanten.php keine Auswahl getroffen hat:
        if(!isset($_POST["auswahl"]) && !isset($_POST["bearbeitungAbschicken"]))
        {
        echo "Es wurde kein Datensatz ausgewählt.<br>";
        echo "<a href='Lieferanten.php'>zurück zur Übersicht</a>";
        }


        $db_link->close();

        ?>


            <br><br>            


            </div>

        </div>
        <br><br> <br><br> <br><br> <br><br> 
        <br><br> <br><br> <br><br> <br><br>
    </body>
</html>