<?php 
$pageTitle = "3Dified";
$section = "shop";
$collectionname = trim($_GET["collection"]);
include('inc/header.php'); ?>


		<div class="section shirts latest">

			<div class="wrapper">

				<br><h2><?php echo "$collectionname" ?></h2>

				<?php include("inc/products.php"); ?>
				<?php //include("inc/dbinsert.php"); ?>
				<ul class="products">
					<?php 

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

					$sql = "SELECT * FROM Designs WHERE collection='$collectionname'";
					$products = $conn->query($sql);
					$conn->close();

						//$total_products = count($products);
						$list_view_html = "";
						foreach($products as $product) { 
							$list_view_html = get_list_view_html($product) . $list_view_html;
						}
						echo $list_view_html;
					?>								
				</ul>


			</div>

		</div>

<?php include('inc/footer.php') ?>