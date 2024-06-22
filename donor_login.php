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

// Donors table connection
$donor_name = $_GET["donorName"];
$donor_phone = $_GET["contactNo"];
$donor_address = $_GET["address"];

$sql = "INSERT INTO donors (donor_name, contact_no, address) VALUES ('$donor_name', '$donor_phone', '$donor_address')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "hello";
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
