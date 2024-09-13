<?php
// Database connection parameters
$host = "127.0.0.1"; // or your database server address
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "sa_accounting"; // your database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
