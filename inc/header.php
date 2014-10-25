<?php
if (isset($_GET["login"])) {
	$login = $_GET["login"];
} else {
	$login = "false";
}
?>

<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href='<?php echo "/index.php?login=".$login; ?>'>3Dified</a></h1>

			
				<ul class="nav">
					<?php if ($login == "true") { echo '
					<li class="shirts '; if ($section == "shop") { echo "on"; } echo '"><a href="shop.php?login=true">Shop</a></li>'.
					'<li class="contact '; if ($section == "design") { echo "on"; } echo '"><a href="designer.php?login=true&username=guest">Design</a></li>'.
					'<li class="cart"><a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=Q6NFNPFRBWR8S&amp;display=1">Shopping Cart</a></li>
					'; }
					else { echo '
					<li class="signin"><a href="login.php">Sign In</a></li>
					';

				} ?>
				</ul>

		</div>

	</div>

	<div id="content">