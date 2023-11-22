<?php
 $servername = "localhost";

    $username = "root";

    $dbname = "hotel_booking"; 

	$password = "";

	
	$notification = "successfull";
	
// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	 $Roomtype = $_POST['roomtype'];

     $Arrivaldate = $_POST['arrivaldate'];

     $Departuredate = $_POST['departuredate'];

     $sql = "INSERT INTO hotel(roomtype, arrivaldate, departuredate) VALUES('$Roomtype','$Arrivaldate','$Departuredate')";
	 

if ($conn->query($sql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('$notification');</script>";
  header ('location:luxury/luxury.php');
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>