<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title> 

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8"> 

		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<link rel="stylesheet" type="text/css" href="dashboard-css.css">
		<link rel="stylesheet" type="text/css" href="font-awesome.min.css">
   		<link rel="stylesheet" type="text/css" href="w3-4-15.css">
		
	

	
</head>
	
<body>

<div class="hero-image">	
	<br>
		<center>
		<a class="sansserif" href="index.htm" target="_self">Home</a>
		<a class="sansserif" href="dashboard.php" target="_self">Dashboard</a>
		<a class="sansserif" href="Lieferanten.php" target="_self">Lieferanten</a> 
		<a class="sansserif" href="Artikel.php" target="_self">Artikel</a>
		<a class="sansserif" href="GUV.php" target="_self">GUV</a>	
			<br>
  		<h1>Dashboard</h1></center>


<?php

/// CONNECT TO DATABASE
require_once ('konfiguration.php');
$db_link = new mysqli($hostname, $user, $pass, $dbase);

/// UTF8 für Umlaute
mysqli_set_charset($db_link, 'utf8');

/// Display error when connection fails
if ($db_link->connect_error) {
die("Connection failed: " . $db_link->connect_error);
}	
	
	
	// Berehnung Umsatz ges 2021
	$sql2021 = "SELECT SUM(Betrag) AS summe FROM postbank_buchungen WHERE Kategorie='Umsatz'AND Jahr='2021'" ;
	$result2021 = mysqli_query($db_link, $sql2021);
	
	if (mysqli_num_rows($result2021) > 0) {
		// output data of each row
		while($row2021 = mysqli_fetch_assoc($result2021)) {
			$total2021 =  $row2021["summe"];
		}
	} else {
		echo "0 results";
	  }


	
?>



<div class="row">
  <div class="col-3 col-s-6 menu">
	  <center>
		  <hr>
			<p class="sansserif" style="font-size:20px"><b>Deals</b></p>
		  <hr></center>

		  <div class="w3-container w3-red w3-padding-16">
       		 <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        		<div class="w3-right">
        		  <h3>11</h3>
        		</div>
       		 <div class="w3-clear"></div>
       	 <h4>Bestellungen 2021</h4>
      	</div>
	  <br>
	  
	  <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3> <?php echo $total2021 ?> </h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Umsatz 2021 </h4>
      </div>
	  <br>
	  
	  <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>3</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Deals: Konfiguration</h4>
      </div>
	  
	  <br>
	  
	  <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>2</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Neue Interessenten</h4>
	  </div>
	  <br>
	 <hr>
		<center>
			<p class="sansserif" style="font-size:20px"><b>Aufgaben</b></p>
		</center>
	<hr>
	<div class="list">
	 	<ul>
      		<li>Baiges Zifferblatt</li>
      		<li>Shellmann schreiben</li>
			<li>Mavsocial Beiträge schreiben</li> 
     	</ul>  
	</div>
</div>

  <div class="col-3 col-s-6 menu">
	 <center>
		 	<hr>
		 <p class="sansserif" style="font-size:20px"><b>Aufträge</b></p>
			<hr>
		 <div class="list">
	 		<ul>
      			<li>CS Define - 01.06.21</li>
      			<li>REG Sage - 23.07.21</li>
	  			<li>...</li>
     		</ul>  
		 </div>
	  </center>
  </div>

  <div class="col-3 col-s-6">
	  
	  <center>
		  <hr>
			<p class="sansserif" style="font-size:20px"><b>In Arbeit</b></p>
		  <hr></center>
			
  		 	<p><b>3 x Classic Silver 4.0 Stock</b></p>
  		  	<div class="w3-grey">
     		<div class="w3-container w3-center w3-padding w3-green" style="width:85%">85%</div>
   		 	</div>

    		<p><b>4 x Regulator 4.0 Stock</b></p>
    		<div class="w3-grey">
     		<div class="w3-container w3-center w3-padding w3-orange" style="width:60%">60%</div>
    		</div>
	  
			<p><b>Classic Silver 4.0 Stock </b></p>
    		<div class="w3-grey">
      		<div class="w3-container w3-center w3-padding w3-red" style="width:40%">40%</div>
    		</div>
  

    		<p><b>White Roman 4.0 Stock </b></p>
    		<div class="w3-grey">
      		<div class="w3-container w3-center w3-padding w3-red" style="width:30%">30%</div>
    
  	</div>
 	  
	   	<center>
		 	<hr> 
				<p class="sansserif" style="font-size:20px"><b>Material</b></p>
		   	<hr>
		</center>
	  		 <div class="list">
	 			<ul>
     				<li>50 Unruhen</li>
      				<li>100 Schrauben Sperrfeder</li>
      				<li>1000 Platinenschrauben</li>
	  				<li>Zifferblatt Guilloche</li>
					<li>Rohlinge große Stundenzeiger</li>

     			</ul>  
			</div>
	  
	  
    
	
	 </div>	
	  
   <div class="col-3 col-s-6 menu">
	  <center>
		<hr>
		 <p class="sansserif" style="font-size:20px"><b>Projekte</b></p>
		<hr>
		  <div class="list">
    		<ul>
     		 <li>Marketing</li>
     		 <li>Vertrieb</li>
	 		 <li>ERP Tool</li>
   			</ul>
		  </div>
		  </center>
  	</div>

  
	</div>

	<div class="footer">
  		<p>Time is an illusion. But a beautifull one.</p>
		<div><i class="fa fa-comment w3-xxxlarge"></i></div>
	</div>
</div>
	
</body>
</html>