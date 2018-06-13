<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee101";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
	
	echo "You've connected to the database";
}

$sql = "SELECT * FROM `employee_data`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>id: " . $row["id"]. "<br> Name: " . $row["name"]. " <br>Surname:" . $row["surname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>