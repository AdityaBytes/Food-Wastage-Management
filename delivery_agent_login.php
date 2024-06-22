<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Database connection parameters
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

    // Sanitize input data
    $agentName = $_GET["agentName"];
    $contactNo =$_GET["contactNo"];
    $vehicleNo = $_GET["vehicleNo"];

    // SQL query to insert data into the database
 $sql = "INSERT INTO delivery_agents (agentName, contactNo, vehicleNo) VALUES ('$agentName', '$contactNo', '$vehicleNo')";

    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "heLLO";
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
