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
$sql = "CREATE TABLE OURDESIGN (
fullname VARCHAR(30) NOT NULL,
contact VARCHAR(10),
email VARCHAR(50),

details VARCHAR(50),
budget VARCHAR(20)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table CUST created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>