<?php


$card = $_POST["card"];
$exdate = $_POST["exdate"];
$cvv = $_POST["cvv"];
$holder = $_POST["holder"];


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

// Get form data
$card = $_POST['card'];
$exdate = $_POST['exdate'];
$cvv = $_POST['cvv'];
$holder = $_POST['holder'];

// Insert data into database
$sql = "INSERT INTO payment (card, exdate, cvv, holder) VALUES ('$card', '$exdate', '$cvv', '$holder')";

if ($conn->query($sql) === TRUE) {
    echo "Payment successfully processed!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
