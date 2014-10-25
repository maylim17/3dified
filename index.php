<?php 
$pageTitle = "3Dified";
$section = "home";
?>

<?php
// if ($_GET["status"]==1) {
// 	include('inc/header.php');
// }
// include('inc/header-signin.php');
include('inc/header.php'); 
?>

		<div class="section banner">

		</div>

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