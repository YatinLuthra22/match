<?php

$servername = "localhost";
$username = $_GET["username"];
$password = $_GET["password"];
$email = $_GET["email"];
$contact = $_GET["contact"];
$password = $_GET["password"];
$comment = $_GET["comment"];
$dbname = "database_name";

// Create connection
$conn = new mysqli($servername,
	$username, $password,$email,$contact,$comment, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}

/*$sqlquery = "INSERT INTO table VALUES
	('John', 'Doe', 'john@example.com')";*/

if ($conn->query($sql) === TRUE) {
	echo "record inserted successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  
    // collect value of input field
    $data = $_REQUEST['val1'];
  
    if (empty($data)) {
        echo "data is empty";
    } else {
        echo $data;
    }
}