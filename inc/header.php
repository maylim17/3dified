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

			<h1 class="branding-title"><a href="./">3Dified</a></h1>

			<ul class="nav">
				<li class="shirts <?php if ($section == "shop") { echo "on"; } ?>"><a href="shop.php">Shop</a></li>
				<li class="contact <?php if ($section == "design") { echo "on"; } ?>"><a href="designer.php">Design</a></li>
				<li class="cart"><a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=Q6NFNPFRBWR8S&amp;display=1">Shopping Cart</a></li>
			</ul>

		</div>

	</div>

	<div id="content">