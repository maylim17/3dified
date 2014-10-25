<?php 
$pageTitle = "3Dified";
$section = "shop";
$collectionname = trim($_GET["collection"]);
include('inc/header.php'); ?>


		<div class="section shirts latest">

			<div class="wrapper">

				<br><h2><?php echo "$collectionname" ?></h2>

				<?php include("inc/$collectionname.php"); ?>
				<?php include("inc/dbinsert.php"); ?>
				<ul class="products">
					<?php 

						$total_products = count($products);
						$list_view_html = "";
						foreach($products as $product_id => $product) { 
							$list_view_html = get_list_view_html($product_id,$product) . $list_view_html;
						}
						echo $list_view_html;
					?>								
				</ul>


			</div>

		</div>

<?php include('inc/footer.php') ?>