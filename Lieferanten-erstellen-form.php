<!DOCTYPE html>
<html>
<head>

<title>Lieferanten erstellen</title>
	
	
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<link rel="stylesheet" type="text/css" href="dashboard-css.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	
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
		<a class=sansserif href="https://php.crnfour.de/" target=>Home</a>
		<a class="sansserif" href="https://php.crnfour.de/Lieferanten" target>Lieferanten</a> 
		<a class="sansserif" href="https://php.crnfour.de/Artikel" target>Artikel</a></center>	

		
<center><br><br>
	<div class=container>
<form action="insert-supplier.php" method="post">
	<h3> Lieferanten hinzufügen</h3>
	
<table>
	<tr>
		<td>Name:</td>
		<td><input type="text" name="name" id="name">
	</tr>

	<tr>
		<td>Ansprechpartner:</td>
		<td><input type="text" name="ansprechpartner" id="ansprechpartner">
	</tr>

	<tr>
		<td>E-Mail:</td>
		<td><input type="text" name="email" id="email">
	</tr>
	
	<tr>
		<td>Ort:</td>
		<td><input type="text" name="ort" id="ort">
	</tr>
	
</table><br>
	
    <input type="submit" name="submit" value="Hinzufügen">
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