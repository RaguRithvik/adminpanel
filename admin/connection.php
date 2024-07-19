<?php
//online-connection

// $servername = "localhost";
// $username = "sunshinegranite";
// $password = "SC4SFe2f9y%x";
// $db = "sunshinegranite";


//local-connection

$servername = "localhost";
$username = "root";
$password = "";
$db = "sakthibuilder";


// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// checks connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
@session_start();
?>