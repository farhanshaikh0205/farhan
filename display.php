<?php
$servername = "ap-cdbr-azure-southeast-a.cloudapp.net";
$username = "bee5b8f8c6e974";
$password = "e0bcfff2";
$dbname = "phppocaq5avollzv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, name FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "EmpId: " . $row["id"]. " EmpName: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
