<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname = "INTERIORPROJECT";

// Create connection
$conn = new mysqli("$servername", "$username","$password","$dbname");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$fullname=$contact=$email=$requirements="";


$fullname=$_POST["fullname"];
$contact=$_POST["contact"];
$email=$_POST["email"];

$requirements=$_POST["req"];



  $sql = "INSERT INTO ownspace(fullname, email, contact,requirements)
  VALUES ('$fullname','$email','$contact','$requirements')";
if ($conn->query($sql) === TRUE) header("Location:thank.html");
?>