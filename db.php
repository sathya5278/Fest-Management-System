<?php
$dbservername = "localhost:3308";
$dbusername = "root";
$dbpassword = "";
$dbname = "fms";

// Create connection
$conn =  new mysqli($dbservername,$dbusername,$dbpassword,$dbname);

// Check connection
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
else
    file_put_contents("test.txt","CONNECTED SUCCESSFULLY");
?>
