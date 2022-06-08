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
            $abfrage = "SELECT * FROM lieferanten WHERE id = $id";
            $result = mysqli_query($db_link, $abfrage);

            // 4. Datensatz in Variablen speichern
            $dsatz = mysqli_fetch_assoc($result);
            $id = $dsatz['ID'];
            $l_name = $dsatz['l_name'];
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
            echo "<form action="Lieferanten-bearbeiten-form.php" method="post">";
                echo "<h3> Lieferanten bearbeiten</h3>";
                echo "<table>
                    <tr>
                        <td>Lieferanten Name:</td>
                        <td><input type="text" name="l_name" value='l_name' >
                    </tr>

                    <tr>
                        <td>Webseite:</td>
                        <td><input type="text" name="website" >
                    </tr>
                    <tr>
                        <td>Produkte:</td>
                        <td><input type="text" name="produkte" >
                    </tr>
                    
                    <tr>
                        <td>Ansprechpartner:</td>
                        <td><input type="text" name="ansprechpartner" >
                    </tr>

                    <tr>
                        <td>E-Mail:</td>
                        <td><input type="text" name="email" >
                    </tr>

                    <tr>
                        <td>Strasse:</td>
                        <td><input type="text"  name="strasse" >
                    </tr>				

                    <tr>
                        <td>Hausnummer:</td>
                        <td><input type="text"  name="hausnummer" >
                    </tr>

                    <tr>
                        <td>PLZ:</td>
                        <td><input type="text" name="plz" >
                    </tr>

                    <tr>
                        <td>Ort:</td>
                        <td><input type="text" name="ort" >
                    </tr>

                    <tr>
                        <td>Telefon:</td>
                        <td><input type="text" name="telefon" >
                    </tr>
                </table><br>
                   <input type="submit" name="hinzufügen" value="Hinzufügen">
            </form>
            </div>
            </center>
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