<?php 
if (isset($_GET["username"])) {
	$username = $_GET["username"];
}
include("inc/".$username.".php"); 
?>
<?php 
$pageTitle = "Design Portfolio";
$section = "design";
include('inc/header.php'); ?>

		<div class="section shirts page">

			<div class="wrapper">

				<h1>Your Design Portfolio</h1>

				<form method="post" action="upload.php">	
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