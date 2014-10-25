<html>
<body>


<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
	<input type="text" name="search" value="Enter search term">
	<input type="submit" name="submit" value="Submit">
</form>

<?php
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
$search = $_POST['search'];
//query for users that match search term
$sqluser = "SELECT * FROM Users WHERE username LIKE '%$search%'";
$result = $conn->query($sqluser);
//print results for matched users
echo "<p>USERS FOUND</p>";
while ($row = $result->fetch_assoc()) {
	echo "user: ".$row["username"]." password: ".$row["password"]."<br>";
}

// query for designs that match search term
$sql = "SELECT * FROM Designs WHERE title LIKE '%$search%' UNION SELECT * FROM Designs WHERE tags LIKE '%$search%' UNION SELECT * FROM Designs WHERE description LIKE '%$search%'";
$result = $conn->query($sql);
//print results for matched designs
echo "<p>DESIGNS FOUND</p>";
while ($row = $result->fetch_assoc()) {
	echo "Title: ".$row["title"]." by User: ".$row["username"]."described as: ".$row[description];
}

$conn->close();
?>

</body>
</html>