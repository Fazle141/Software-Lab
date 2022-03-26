<?php
$servername = "localhost";
$username1 = "root";
$password1 = "";
$dbname = "medichelper";
// Create connection
$conn2 = new mysqli($servername, $username1, $password1, $dbname);
// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}

?>