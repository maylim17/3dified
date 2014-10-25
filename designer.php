<?php 
if (isset($_GET["username"])) {
	$username = $_GET["username"];
}
include("inc/".$username.".php"); 
?>
<?php 
$pageTitle = "Mike's Full Catalog of Shirts";
$section = "design";
include('inc/header.php'); ?>

		<div class="section shirts page">

			<div class="wrapper">

				<h1>Your Design Portfolio</h1>

				<form>	
					<input type="submit" value="Upload New Design" name="new_design">
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