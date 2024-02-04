<?php


// Retrieve data from form submission
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$nic = $_POST['nic'];
$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];
$bookname = $_POST['bookname'];




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



// Insert data into the database
$sql = "INSERT INTO book_details (fullname, email, nic, phonenumber, address, bookname) VALUES ('$fullname', '$email', '$nic', '$phonenumber', '$address', '$bookname')";


$stmt = $conn->prepare("INSERT INTO book_details (fullname, email, nic, phonenumber, address, bookname) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $fullname, $email, $nic, $phonenumber, $address, $bookname);



if ($stmt->execute()) {
    // Redirect to payment.php after successful database insertion
    header("Location: payment.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}
$conn->close();
$stmt->close();


?>

