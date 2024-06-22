<?php
$servername = "127.0.0.1";
$username = "root";
$password = '';
$dbname = "wastemanagement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,3308);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//contact_us connection 
$c_name = $_GET["myname"];
$c_mail = $_GET["email"];
$reason = $_GET["reason"];
$Message=$_GET["message"];

$sql = "INSERT INTO contact_us(C_NAME, C_Mail,Reason,Message) VALUES ('".$c_name."', '".$c_mail."', '".$reason."','".$Message."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>