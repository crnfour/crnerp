<!DOCTYPE html>
<html>
<header>

<meta charset="UTF-8"> 


</header>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crnerp_v01";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Kategorie, Jahr_Monat, SUM(Betrag) AS summe FROM postbank_buchungen WHERE Kategorie='Material'AND JAHR_Monat='Y2021M5'" ;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $total = "<br>" .$row["Kategorie"] . ": " . $row["summe"] ."€ in " . $row["Jahr_Monat"];
    }
} else {
    echo "0 results";
  }

echo $total;

$conn->close();
?>

</body>
</html>
