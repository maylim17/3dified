<?php 
		$search = $_GET['search'];

		if ($search) {

			//connect to database
			$servername = "localhost";
			$username = "root";
			if ($os == "Mac") {
				$password = "root";
			}
			else {
				$password = "";
			}
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
					echo get_list_view_html_s($row["title"], $row["designid"], $row["ssurl"], $row["collection"]);
				}
				echo "</ul><br>";
			}
			else {
				echo "<p>No designs relating to '$search' found.</p><br>";
			}


			$conn->close();
		}

		function get_list_view_html_s($title, $product_id, $img, $collection) {
   			$output = "";
   			$output = $output . "<li>";
    		$output = $output . '<a href="product.php?&id=' . $product_id . '">';
    		$output = $output . '<img src="' . $img . '">';
    		$output = $output . "<p>$title</p>";
    		$output = $output . "</a>";
    		$output = $output . "</li>";
    		return $output;
		}
	?>
