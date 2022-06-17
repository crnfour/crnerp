<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
<meta charset="UTF-8"> 

<title>Lieferanten erstellen</title>
	
	
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<link rel="stylesheet" type="text/css" href="dashboard-css.css">
		<link rel="stylesheet" type="text/css" href="font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="w3-4-15.css">
	
	<style type="text/css">
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