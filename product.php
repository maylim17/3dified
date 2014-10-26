<?php 

if (isset($_GET["id"])) {
	$product_id=$_GET["id"];
}
else {
	header("Location: shop.php");
	exit();
} 

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

	$sql = "SELECT * FROM Designs WHERE designid=$product_id";
	$producti = $conn->query($sql);
	$product = $producti->fetch_assoc();

	$conn->close();

$section = "product";

$section = "shop";
$pageTitle = $product["title"];
include("inc/header.php"); ?>

		<div class="section page">

			<div class="wrapper">

				<br>
				<div class="shirt-picture">
					<span>
						<img src="<?php echo $product["ssurl"]; ?>" alt="<?php echo $product["title"]; ?>">
					</span>
				</div>
 
				<div class="shirt-details">

					<h1><span class="price"><?php echo $product["title"]; ?></span></h1>

					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="<?php echo $product['paypal'] ?>">
						<table>
						<tr>
							<th>
								<input type="hidden" name="on0" value="Size">
								<label for="os0">About</label>
							</th>
							<td>
								<?php echo $product["description"] ?>
							</td>
						</tr>
						<tr>
							<th>
								<input type="hidden" name="on0" value="Size">
								<label for="os0">Price</label>
							</th>
							<td>
								$<?php echo $product["price"] ?>
							</td>
						</tr>
						<tr>
							<th>
								<input type="hidden" name="on0" value="Size">
								<label for="os0">Designer</label>
							</th>
							<td>
								<?php echo $product["username"] ?>
							</td>
						</tr>
						</table>
						<input type="submit" value="Add to Cart" name="submit">
					</form>

				</div>

			</div>

		</div>

<?php include("inc/footer.php"); ?>