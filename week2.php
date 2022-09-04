<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_attendance";

$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error)
die("Connection failed: " . $conn->connect_error);
else
echo "Successfully Connected to the database!";
echo'<br>';


$sql = "SELECT * FROM student"; 
$result = $conn->query($sql);
if ($result->num_rows > 0)
{ 
while($row = $result->fetch_assoc()) 

{
echo "id: " . $row["Student_id"]. " - Name: " . $row["Student_name"] . "<br>";

}
}
else
{
    echo "0 results";
}
echo'<br>';

$sql = "INSERT INTO student (Student_id, Student_name, Student_email)
VALUES (192332,'John','john@example.com')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(); 

$sql = "UPDATE student SET Name = 'Joe' WHERE STID=192332";
if ($conn->query($sql) === TRUE) {
echo "Record updated successfully";
} else {
echo "Error updating record: " . $conn->error;
}

?>


