<?php 


	
	$fullname = $_POST["fullname"];
	$username = $_POST["username"];
	$email = $_POST["email"];	
	$nic = $_POST["nic"];
	$dob = $_POST["dob"];
	$phonenumber = $_POST["phonenumber"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$position = $_POST["position"];

   

$servername = "localhost";
$username = "root";
$password = "";
$database = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Insert data into database
$sql = "INSERT INTO careere (fullname, username, email, nic, dob, phonenumber, address, city, position) VALUES ('$fullname', '$username', '$email', '$nic', '$dob', '$phonenumber', '$address', '$city', '$position')";

if ($conn->query($sql) === TRUE) {
    echo "successfully processed!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
