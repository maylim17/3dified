<?php 
if (isset($_GET["username"])) {
	$designer = $_GET["username"];
} 

function get_list_view_html($product) {
    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="design.php?id=' . $product["designid"] . '">';
    $output = $output . '<img src="' . $product["ssurl"] . '" alt="' . $product["title"] . '">';
    $output = $output . "<p>".$product['title']."</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

?>
<?php 
$pageTitle = "Design Portfolio";
$section = "design";
include('inc/header.php'); 
?>

		<div class="section shirts page">

			<div class="wrapper">

				<h1>Design Portfolio</h1>

				<?php 
					$servername = "localhost";
					$dbuser = "root";
					if ($os == "Mac") {
						$dbpass = "root";
					}
					else {
						$dbpass = "";
					}
					$dbname = "myDB";
					$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);
					// Check connection
					if ($conn->connect_error) {
    					die("Connection failed: " . $conn->connect_error);
					}


					$sqluser = "SELECT * FROM Designs WHERE username='$designer'";
					$result = $conn->query($sqluser);

					if ($result->num_rows) {
						echo '<ul class="products">';
						while ($row = $result->fetch_assoc()) {
							echo get_list_view_html($row);
						}
						echo "</ul><br>";
					}
					else {
						echo "<p>No designs were found.</p><br>";
					}
				$conn->close();
			?>

				<form method="get" action="upload.php">	
					<input type="submit" value="Upload New Design">
				</form>


				<ul class="products">
					<?php foreach($products as $product_id => $product) { 
							echo get_list_view_html($product_id,$product);
						}
					?>
				</ul>

			</div>

		</div>

<?php include('inc/footer.php') ?>