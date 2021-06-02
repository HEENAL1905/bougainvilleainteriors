<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "INTERIORPROJECT";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE ownspace (
fullname VARCHAR(30) NOT NULL,

email VARCHAR(50),
contact VARCHAR(10),

requirements VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table DETAILS created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>