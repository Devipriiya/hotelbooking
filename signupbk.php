<?php
    $servername = "localhost";

    $username = "root";

    $password = "";

    $dbname = "hotel_booking"; 
	
	$message = "Register successful";
	
	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	 $Name = $_POST['name'];

     $email = $_POST['email'];

     $password = $_POST['password'];
     $confirmpassword = $_POST['confirmpassword'];
     $phone = $_POST['phone'];
    

     $sql = "INSERT INTO signup(username, email, password, phone) VALUES('$Name','$email','$password','$phone')";
	 

if ($conn->query($sql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('$message');window.location.href='login.php';</script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>