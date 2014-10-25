<?php 
$pageTitle = "3Dified";
$section = "home";
// if ($_GET["status"]==1) {
// 	include('inc/header.php');
// }
// include('inc/header-signin.php');
include('inc/header.php'); ?>

		<div class="section banner">

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Mike&rsquo;s Latest Shirts</h2>

				<?php include("inc/products.php"); ?>
				<ul class="products">
					<?php 

						$total_products = count($products);
						$position = 0;
						$list_view_html = "";
						foreach($products as $product_id => $product) { 
							$position = $position + 1;
							if ($total_products - $position < 4) {
								$list_view_html = get_list_view_html($product_id,$product) . $list_view_html;
							}
						}
						echo $list_view_html;
					?>								
				</ul>

			</div>

		</div>

<?php include('inc/footer.php') ?>