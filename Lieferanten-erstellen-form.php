<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  

<title>Lieferanten erstellen</title>
	
	
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
		<a class="sansserif" href="Lieferanten.php" target="_self">Lieferanten</a> 
		<a class="sansserif" href="Artikel.php" target="_self">Artikel</a>
		<a class="sansserif" href="GUV.php" target="_self">GUV</a>	
		</center>	

		<center><br><br>
			<div class=container>
				<form action="insert-supplier.php" method="post">
					<h3> Lieferanten hinzufügen</h3>
					<table>
						<tr>
							<td>Lieferanten Name:</td>
							<td><input type="text" name="l_name" >
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
		
			<br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br>
		</div>
	</body>
</html>