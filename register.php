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

// FoodDonations connection
$donor_name = $_GET["myname1"];
$donor_email = $_GET["myemail"];
$donor_phone = $_GET["myphone"];
$collection_address = $_GET["myadd"];
$food_category = isset($_GET["myfood"]) ? $_GET["myfood"] : null;
$quantity = $_GET["quantity"];
$preparation_datetime = $_GET["fooddate"];
$special_note = $_GET["note"];
$terms_and_conditions = isset($_GET["t&c"]) ? 1 : 0;

$sql = "INSERT INTO FoodDonations (donor_name, donor_email, donor_phone, collection_address, food_category, quantity, preparation_datetime, special_note, terms_and_conditions) 
        VALUES ('$donor_name', '$donor_email', '$donor_phone', '$collection_address', '$food_category', '$quantity', '$preparation_datetime', '$special_note', '$terms_and_conditions')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
