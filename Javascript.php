<!DOCTYPE html>
<html>
<body>
<input type=button value="increment" onclick="button1()" />
<input type=button value="decrement" onclick="button2()" />
<div id="value"></div>
<script type="text/javascript">
var x=0
var element = document.getElementById("value");
element.innerHTML = x;
function button1(){
element.innerHTML = ++x;
}
function button2(){
element.innerHTML = --x;
}
</script>
</html>

<body>
<h1>Student Information</h1>
<form onsubmit="print_info()" >
<label for="fname">First name:</label>
<input type="text" id="fname" name="fname"><br><br>
<label for="lastname">Last name:</label>
<input type="text" id="lname" name="lname" ><br><br>
<input type="submit">
</form>
<script>
function print_info(){
let name = document.getElementById("fname").value;
let lastname = document.getElementById("lname").value;
alert(name+" "+lastname);
}
</script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<h1>Student Information</h1>
<label for="fname">First name:</label>
<input type="text" id="fname" name="fname"><br><br>
<label for="lastname">Last name:</label>
<input type="text" id="lname" name="lname" ><br><br>
<button class="btn" style="color:white; background-color:#1e8564"
onclick="add_student()">Add Student</button>
<div class=" col-sm-6">
<table id="student_table" class="table" >
<thead class="thead-dark">
<tr>
<th>First Name</th>
<th>Last Name</th>
</tr>
</thead>
</div>
<script>
function add_student(){
let name = document.getElementById("fname").value;
let lastname = document.getElementById("lname").value;
let table = document.getElementById("student_table");
let nrow = table.rows.length;
table.insertRow(nrow);
let row = table.rows[nrow];
let cell1 = row.insertCell(0);
let cell2 = row.insertCell(1);
cell1.innerHTML = name;
cell2.innerHTML = lastname;
}
</script>
</body>
</html>