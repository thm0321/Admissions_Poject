<?php
$servername = "localhost:3306";
$username = "admin";
$password = "4wgUSSRYXJ2dvqG";

//Create connection
$conn = new mysqli($servername, $username, $password);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>