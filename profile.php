<?php 


$pageTitle = "Profile Page";
$section = "Profile";
include('inc/header.php'); 

?>

		<div class="section page">

			<div class="wrapper">

				<br>
				<div class="shirt-picture">
					<span>
						<img src="img/profile.png" alt="<?php echo $product["title"]; ?>">
					</span>
				</div>
 
				<div class="shirt-details">

					<h1><span class="price">My Profile</span></h1>
						<table>
						<tr>
							<th align="left">
                                About Me:   
							</th>

						</tr>
                            <tr>
                            <td>
                                I love computer science. I have lots of dreams and ambitions and I hope to one day code the next Facebook.
							</td>
                            </tr>
						</table>
					</form>

				</div>

			</div>

		</div>



					<span>
						
					</span>

         

<form method="post" action="logout.php">	
					<input type="submit" value="Log Out">
				</form>
               

<?php include('inc/footer.php') ?>