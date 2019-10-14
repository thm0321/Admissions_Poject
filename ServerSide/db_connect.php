<?php
$servername = "localhost";
$username = "gettysb1_admin";
$password = "4wgUSSRYX2dvqG";
$databaseName = "gettysb1_Maindb";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $databaseName);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>