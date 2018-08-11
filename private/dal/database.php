<?php 
    // Set correct settings
    define("servername", "localhost");
    define("username", "root");
    define("password", "");
    define("dbname", "foodtruckdatabase");
    static $conn = NULL;
    // $mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

function database_execute($sql)
{
     // Create connection
    $conn = new mysqli(servername, username, password, dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query($sql);

    $conn->close();
    return $result;
}
?>