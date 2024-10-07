<?php
$servername = "127.0.0.1";
$username = "root";
$password = ""; // Use your actual password if set
$database = "pglife";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

