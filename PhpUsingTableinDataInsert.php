<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LinkUpdate";

//variable define


$a1=$_POST['t1'];
$a2=$_POST['t2'];

//end



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Link VALUES ('$a1','$a2')";

if ($conn->query($sql) === TRUE) {
  

 echo "Link Update...!!";

	echo "<br> <a href=LinkUpdate.html>GO TO BACK</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>