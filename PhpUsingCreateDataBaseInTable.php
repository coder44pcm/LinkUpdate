<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LinkUpdate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Link (
sr_no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
link VARCHAR(30) NOT NULL
 
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>