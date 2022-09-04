<?php
class OPDBS{
    // db CONNECTION 
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "online_attendance";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
    else  
    echo "Successful connected to database"

  }
    //Student part
    class Student extends OPDBS
{
    public function Insert{
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
    }


    public function Delete{
        
    if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
      $sql = "DELETE FROM student WHERE STID=?";
    if ($stmt = $conn->prepare($sql))
      $stmt->bind_param("i", $id);
    else
      {
      $error = $conn->errno . ' ' . $conn->error;
      echo $error;
    }
}
    $stmt->execute();;
    }
    public function Update{
        $sql = "UPDATE student SET Name = 'Joe' WHERE Student_id=192332";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    }     
    else 
    {
        echo "Error updating record: " . $conn->error;
    } 


    public function Show{
        if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["Student_id"]. " - Name: " . $row["Student_name"]. " " . $row["Student_lname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
    }



    public function Printall{
        if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Student_id,Student_email,Student_name, Student_lname,Student_address FROM student WHERE Student_lname='liu'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["Student_id"]. " - Name: " . $row["Student_name"]. " " . $row["Student_lname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

    }
    
}

//Module part
class Module extends OPDBS
{
    public function Insert{
        $sql = "INSERT INTO module (MID, Name, Credit, Level)
        VALUES (?,?, ?, ?, ? )";
        if ($stmt = $conn->prepare($sql)) //prepare the sql statement
         $stmt->bind_param("issss", $MID, $Name, $Credit, $Level);
        //Binds variables to a prepared statement as parameters
        else
        {
        $error = $conn->errno . ' ' . $conn->error;
        echo $error;
        }
        $stmt->execute();// execute sql statement with bind values
        echo "Student has been successfully added!";
        $conn->close();
    }


    public function Delete{
        
    if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
      $sql = "DELETE FROM module WHERE MID=?";
    if ($stmt = $conn->prepare($sql))
      $stmt->bind_param("i", $id);
    else
      {
      $error = $conn->errno . ' ' . $conn->error;
      echo $error;
    }
}
    $stmt->execute();;
    }
    public function Update{
        $sql = "UPDATE module SET Name = 'Joea' WHERE MID= 'IX607001'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    }     
    else 
    {
        echo "Error updating record: " . $conn->error;
    } 


    public function Show{
        if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT MID, Name, Credit FROM module";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["MID"]. " - Name: " . $row["Name"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
    }



    public function Printall{
        if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT MID,Name,Credit,Level FROM module WHERE Credit= 6";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["MID"]. " - Name: " . $row["Name"]. " " . $row["Credit"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

    }
    
}



//Lecture part
class Lecture extends OPDBS
{
    public function Insert{
        $sql = "INSERT INTO lecture (Lecturer_name, Lecturer_email, Lecturer_address, Lecturer_Qualitfication)
        VALUES (?,?, ?, ?, ? )";
        if ($stmt = $conn->prepare($sql)) //prepare the sql statement
         $stmt->bind_param("issss", $Lecturer_name, $Lecturer_email, $Lecturer_address, $Lecturer_Qualitficationl);
        //Binds variables to a prepared statement as parameters
        else
        {
        $error = $conn->errno . ' ' . $conn->error;
        echo $error;
        }
        $stmt->execute();// execute sql statement with bind values
        echo "Lecturer has been successfully added!";
        $conn->close();
    }


    public function Delete{
        
    if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
      $sql = "DELETE FROM lecture WHERE Lecturer_name=?";
    if ($stmt = $conn->prepare($sql))
      $stmt->bind_param("i", $id);
    else
      {
      $error = $conn->errno . ' ' . $conn->error;
      echo $error;
    }
}
    $stmt->execute();;
    }
    public function Update{
        $sql = "UPDATE lecture SET Name = 'Sana' WHERE Lecturer_address= '300 dominion rd'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    }     
    else 
    {
        echo "Error updating record: " . $conn->error;
    } 


    public function Show{
        if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Lecturer_name, Lecturer_address,c FROM lecturer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["Lecturer_name"]. " - eamil: " . $row["Lecturer_email"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
    }



    public function Printall{
        if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Lecturer_name,Lecturer_address,Lecturer_address,Lecturer_Qualitfication FROM lecturer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["Lecturer_name"]. " - eamil: " . $row["Lecturer_email"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

    }
    
}

//enrolment part
class enrolment extends OPDBS
{
    public function Insert{
        $sql = "INSERT INTO enrolment (STID, MID, LID, Block,Mark)
        VALUES (?,?, ?, ?, ? )";
        if ($stmt = $conn->prepare($sql)) //prepare the sql statement
         $stmt->bind_param("issss", $MID, $STID, $LID, $Block,$Mark);
        //Binds variables to a prepared statement as parameters
        else
        {
        $error = $conn->errno . ' ' . $conn->error;
        echo $error;
        }
        $stmt->execute();// execute sql statement with bind values
        echo " has been successfully added!";
        $conn->close();
    }


    public function Delete{
        
    if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
      $sql = "DELETE FROM enrolment WHERE MID=?";
    if ($stmt = $conn->prepare($sql))
      $stmt->bind_param("i", $id);
    else
      {
      $error = $conn->errno . ' ' . $conn->error;
      echo $error;
    }
}
    $stmt->execute();;
    }
    public function Update{
        $sql = "UPDATE enrolment SET Name = 'jenny' WHERE MID= ''";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    }     
    else 
    {
        echo "Error updating record: " . $conn->error;
    } 


    public function Show{
        if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT MID, STID, LID FROM enrolment";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["MID"]. " - STID: " . $row["STID"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
    }



    public function Printall{
        if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT MID,LID,STID,block,mark FROM enrolment WHERE MID='' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["MID"]. " - STID: " . $row["STID"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

    }
    
}
?>