<!DOCTYPE=HTML>
<html>
<body>
	<h1>Login</h1>
	<form method="post" action="login.php">
		Username: <input type="text" name="username" value="<?php echo $_POST["username"];
		/*meant to save user trouble of retyping user*/?>"><br> 
		Password: <input type="password" name="password"><br>
		<input type="submit" name="login" value="Login">
	</form>

	<?php 
		//connect to database
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "myDB";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	//receive password and username
	$user=$_POST["username"];
	$pass=$_POST["password"];


	if ($user && $pass) { 				//test if both username and password is entered
		$sql="SELECT * FROM Users WHERE username='$user' AND password='$pass'";
		$login = $conn->query($sql);
		if ($login->num_rows) {
			echo "Login Successful";
		}
		else {
			echo "Bad Username/Password";
		}
	}
	else if($user==NULL && $pass) {		//if only password is entered
		echo "Please enter username";
	}
	else if($pass==NULL && $user) {		//if only username is entered
		echo "Please enter password";
	}	
	else {								//if nothing is entered
		echo "Please enter username and password";
	}


	$conn->close();
	?>