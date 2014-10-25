<?php 
$pageTitle = "3Dified";
$section = "shop";
//$collectionname = trim($_GET["collection"]);
$collectionname = "Gifts";
include('inc/header.php'); ?>


		<div class="section shirts latest">

			<div class="wrapper">

				<br><h2>Browse All Collections</h2>

				<?php include("inc/collections.php"); ?>
				<ul class="products">
					<?php 

						$total_collections = count($collections);
						$list_view_html = "";
						foreach($collections as $collection_id => $collection) { 
							$list_view_html = get_list_view_html($collection_id,$collection) . $list_view_html;
						}
						echo $list_view_html;
					?>								
				</ul>

			</div>

		</div>

<?php include('inc/footer.php') ?>