<?php

    session_start();

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    //connect to database
    $servername = "localhost";
    $dbuser = "root";
    if (strpos($user_agent, "Mac") !== FALSE) {
        $dbpass = "";
    }
        else {
        $dbpass = "root";
    }
    $dbname = "myDB";

    // Create connection
    $conn = new mysqli($servername, $dbuser, $dbpass, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($username && $password) {               //test if both username and password is entered
        $sql="SELECT * FROM Users WHERE username='$username' AND password='$password'";
        $login = $conn->query($sql);
        if ($login->num_rows) {
            //echo "Login Successful";
            $_SESSION['logon'] = TRUE;
            $_SESSION['user'] = $username;
            header('Location: index.php');
            exit();
        }
        else if($username==NULL && $password) {     //if only password is entered
            echo "Please enter username";
        }
        else if($password==NULL && $username) {     //if only username is entered
            echo "Please enter password";
        }   
        else {
            echo "Bad Username/Password";
        }
    }

    $conn->close();
?>