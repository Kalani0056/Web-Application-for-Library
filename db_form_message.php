<html>
<body>

<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];


$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "library";


$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn -> connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO message (name, email, message) VALUES (?,?,?)";
$stmt = $conn->prepare($sql);


$stmt->bind_param("sss",$name, $email, $message);


if ($stmt->execute()){
    echo "new record successfully";
}else {
    echo "error". $stmt->error;
}

$stmt->close();

?>

























</body>
</html>