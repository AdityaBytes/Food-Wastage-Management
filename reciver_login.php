<?php
$servername = "127.0.0.1";
$username = "root";
$password = '';
$dbname = "wastemanagement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, 3308);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Receivers table connection
$receiver_name = $_GET["receiverName"];
$receiver_phone = $_GET["contactNo"];
$receiver_address = $_GET["address"];

$sql = "INSERT INTO Receivers (receiver_name, contact_no, address) VALUES ('$receiver_name', '$receiver_phone', '$receiver_address')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
