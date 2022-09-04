<?php
include 'Connection.php';
//$servername = "localhost";
//$username = "root";
//$password = ""; 
//$dbname = "online_attendance";
$id = $_POST["STID"];
$name = $_POST["name"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$address = $_POST["address"];
// Create connection
///$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error)
//die("Connection failed: " . $conn->connect_error);
$sql = "INSERT INTO student (Student_id, Student_name, Student_lname, Student_email, Student_address)
VALUES (?,?, ?, ?, ? )";
if ($stmt = $conn->prepare($sql)) //prepare the sql statement
$stmt->bind_param("issss", $id, $name, $lname, $email, $address);
//Binds variables to a prepared statement as parameters
else
{
$error = $conn->errno . ' ' . $conn->error;
echo $error;
}
$stmt->execute();// execute sql statement with bind values
echo "Student has been successfully added!";
$conn->close();

