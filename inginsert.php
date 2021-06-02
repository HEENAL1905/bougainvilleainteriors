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
$fullname=$contact=$email=$room=$address=$requirements="";


$fullname=$_POST["fullname"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$room=$_POST["room"];
$address=$_POST["address"];
$requirements=$_POST["requirements"];



  $sql = "INSERT INTO ing (fullname, email, contact,room,address,requirements)
  VALUES ('$fullname','$email','$contact','$room','$address','$requirements')";
if ($conn->query($sql) === TRUE) header("Location:thank.html");
?>