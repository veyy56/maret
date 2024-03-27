<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_practice9";

//Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check Connection
if ($conn->connect_error){
        die("Connection failed: " . $conn->connection_error);
}
?>