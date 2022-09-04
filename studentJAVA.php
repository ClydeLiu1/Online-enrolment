<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_attendance";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
die("Connection failed: " . $conn->connect_error);
else
$sql = "SELECT * FROM student" ;
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$i = 0;
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$rows[$i] = $row;
$i++;
}
} else {
echo "0 results";
}
?>
<HTML>
<head>
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.cs
s">
</head>
<body>
<h1>Student Information</h1>
<div class=" col-sm-6">
<table id="student_table" class="table" >
<thead class="thead-dark">
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email </th>
</tr>
</thead>
</div>
<script language="JavaScript">//JavaScript is inserted between <script>
//tagS
var result = <?php echo json_encode($rows); ?>; //used to convert PHP
//array or object into JSON representation
let table = document.getElementById("student_table");
//document.getElementById allows changing the element content using its id
let nrow = table.rows.length;
for(i=0; i < result.length; i++){
table.insertRow(nrow);
let row = table.rows[nrow];
let cell1 = row.insertCell(0);
let cell2 = row.insertCell(1);
let cell3 = row.insertCell(2);
let cell4 = row.insertCell(3);
cell1.innerHTML = result[i].Student_id;
cell2.innerHTML = result[i].Student_name;
cell3.innerHTML = result[i].Student_lname;
cell4.innerHTML = result[i].Student_email;
}
</script>
</HTML>