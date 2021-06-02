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
$fullname=$contact=$email=$details=$budget="";


$fullname=$_POST["fullname"];
$contact=$_POST["contact"];
$email=$_POST["email"];

$details=$_POST["details"];
$budget=$_POST["budget"];


  $sql = "INSERT INTO ourdesign (fullname, email, contact,details,budget)
  VALUES ('$fullname','$email','$contact','$details','$budget')";
if ($conn->query($sql) === TRUE) header("Location:thank.html");

?>