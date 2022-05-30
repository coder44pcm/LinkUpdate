<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LinkUpdate";

$srno = $_POST['srno'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT link FROM Link WHERE sr_no='$srno'";
$result = $conn->query($sql);

echo "<h1> Your Link </h1> <br>";


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

		$a = $row["link"];
     
	echo "<a href=$a>$a</a>";
  }


	echo "<br><a href=SearchPage.html>GO TO BACK</a>";
} else {
  echo "0 results";
}
$conn->close();
?>