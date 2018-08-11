<!DOCTYPE html>
<html>
<head>
<title>Getting Started With PHP</title>
</head>
<body>
<h1>Beginners Guide For PHP</h1>
<p>Tutorial Series For Learning PHP</p>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodtruckdatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT idcountry, name FROM country";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["name"] ."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>