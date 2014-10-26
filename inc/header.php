<?php
session_start();

if ($_SESSION['logon']) {
	$login = "true";
} else {
	$login = "false";
}

//check if windows or mac, for developing purpose only
$user_agent = getenv("HTTP_USER_AGENT");

if(strpos($user_agent, "Win") !== FALSE)
$os = "Windows";
else if(strpos($user_agent, "Mac") !== FALSE)
$os = "Mac";

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
					'<li class="contact '; if ($section == "design") { echo "on"; } echo '"><a href="designer.php?username='.$_SESSION["user"].'">Design</a></li>'.
					'<li class="cart"><a href="profile.php">Profile</a></li>
					'; }
					else { echo '
					<li class="signin"><a href="login.php">Sign In</a></li>
					';

				} ?>
				</ul>

		</div>

	</div>

	<div id="content">