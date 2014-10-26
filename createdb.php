<?php
/*$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();*/
?>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

$sql = "CREATE TABLE Designs (
	designid INT(5) AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(50),
	description VARCHAR(300),
	collection VARCHAR(20),
	tags VARCHAR(300),
	username VARCHAR(20),
	price FLOAT,
	stlurl VARCHAR(200),
	ssurl VARCHAR(200)
	)";
if ($conn->query($sql) === TRUE) {
    echo "Table Designs created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

/*$sql = "CREATE TABLE Users (
	username VARCHAR(20) PRIMARY KEY,
	password VARCHAR(20),
	email VARCHAR(100)
	)";
if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}*/

$sql = "CREATE TABLE Collections (
	collections VARCHAR(20) PRIMARY KEY,
	imgurl VARCHAR(100)
	)";
if ($conn->query($sql) === TRUE) {
    echo "Table Collections created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>