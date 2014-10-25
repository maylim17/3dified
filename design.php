<?php 

if (isset($_GET["username"])) {
	$username = $_GET["username"];
	
	include("inc/".$username.".php"); 
}

if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
	if (isset($products[$product_id])) {
		$product = $products[$product_id];
	}
}


if (!isset($product)) {
	header("Location: shop.php");
	exit();
}

$section = "design";
$pageTitle = $product["title"];
include("inc/header.php"); ?>

		<div class="section page">

			<div class="wrapper">

				<br>
				<div class="shirt-picture">
					<span>
						<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["title"]; ?>">
					</span>
				</div>

				<div class="shirt-details">

					<h1><span class="price"><?php echo $product["title"]; ?></span></h1>

					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
						<input type="hidden" name="item_name" value="<?php echo $product["title"]; ?>">
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
						<!-- <input type="submit" value="Add to Cart" name="submit"> -->
					</form>

				</div>

			</div>

		</div>

<?php include("inc/footer.php"); ?>