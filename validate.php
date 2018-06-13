<?php

include "testHeader.php";

/** Retrieve data from form.  */
 
$name = $surname = $age = $userName = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	//Check to see if POST array has any null null values
	foreach($_POST as $key => $value) {
		//echo "$key = $value";
		if(empty($value)){
			exit("You left something blank!");
		}
	}
	
	//Then run security functions on POST Array
	$name = test_input($_POST["name"]);
	$surname = test_input($_POST["surname"]);
	$age = test_input($_POST["age"]);
	$userName = test_input($_POST["userName"]);
	$password = test_input($_POST["password"]);

	/**Make database connection and insert data into a table*/

	$link = mysqli_connect("localhost", "root", "", "employee101");

	// Check connection
	if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
	}


	// attempt insert query execution
	$sql = "INSERT INTO employee_data (name, surname, age, username, password) VALUES ('$name', '$surname', '$age', '$userName', '$password')";
	if(mysqli_query($link, $sql)){
	echo "Records added successfully.";
	} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

	// close connection
	mysqli_close($link);
}
	
	
		
	
function test_input($data) {

	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	
}




include "testFooter.php";

?>