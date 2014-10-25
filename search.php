<html>
<body>

<?php

$pageTitle = "Search 3Dified";
$section = "Search";
include('inc/header.php');

$search = $_GET['search'];

if ($search) {

	//connect to database
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "myDB";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	//collect search term


	//query for users that match search term
	$sqluser = "SELECT * FROM Users WHERE username LIKE '%$search%'";
	$result = $conn->query($sqluser);
	
	//print results for matched users
	// if ($result->num_rows) {
	// 	echo "<p>USERS FOUND</p>";
	// 	while ($row = $result->fetch_assoc()) {
	// 		echo "user: ".$row["username"]." password: ".$row["password"]."<br>";
	// 	}
	// }
	// else {
	// 	echo "<p>No users relating to '$search' found.</p>";
	// }
	
	// query for designs that match search term
	$sql = "SELECT * FROM Designs WHERE title LIKE '%$search%' UNION SELECT * FROM Designs WHERE tags LIKE '%$search%' UNION SELECT * FROM Designs WHERE description LIKE '%$search%'";
	$result = $conn->query($sql);
	//print results for matched designs
	if ($result->num_rows) {
		echo "<p>DESIGNS FOUND</p>";
		while ($row = $result->fetch_assoc()) {
			echo "Title: ".$row["title"]." by User: ".$row["username"]."described as: ".$row[description];
		}
	}
	else {
		echo "<p>No designs relating to '$search' found.</p>";
	}

	$conn->close();
}
?>

<form method="get" action="<?php $_SERVER['PHP_SELF']; ?>">
	<input type="search" name="search" value="<?php echo $search; ?>"><br><br>
	<input type="submit" name="submit" value="Search 3Dified!">
</form>

</body>
</html>