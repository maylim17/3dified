<html>
<body>
<?php

$pageTitle = "Search 3Dified";
$section = "Search";
include('inc/header.php');
?>

<div class="section shirts latest">
	<div class="wrapper">

		<form method="get" action="<?php $_SERVER['PHP_SELF']; ?>">
			<br><input type="search" name="search" value="<?php echo $search; ?>"><br><br>
			<input type="submit" name="submit" value="Search 3Dified!">
		</form>

		<?php 
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

			//query for users that match search term
			$sqluser = "SELECT * FROM Users WHERE username LIKE '%$search%'";
			$result = $conn->query($sqluser);
	
			$sql = "SELECT * FROM Designs WHERE title LIKE '%$search%' UNION SELECT * FROM Designs WHERE tags LIKE '%$search%' UNION SELECT * FROM Designs WHERE description LIKE '%$search%'";
			$result = $conn->query($sql);
			//print results for matched designs
			if ($result->num_rows) {
				echo "<p>DESIGNS FOUND</p>";
				echo '<ul class="products">';
				while ($row = $result->fetch_assoc()) {
					echo get_list_view_html($row["title"], $row["designid"], $row["ssurl"], $row["collection"]);
				}
				echo "</ul>";
			}
			else {
				echo "<p>No designs relating to '$search' found.</p>";
			}

			$conn->close();
		}

		function get_list_view_html($title, $product_id, $img, $collection) {
   			$output = "";
   			$output = $output . "<li>";
    		$output = $output . '<a href="design.php?collection=' . $collection . '&id=' . $product_id . '">';
    		$output = $output . '<img src="' . $img . '">';
    		$output = $output . "<p>$title</p>";
    		$output = $output . "</a>";
    		$output = $output . "</li>";
    		return $output;
		}
	?>


	</div>
</div>

</body>
</html>