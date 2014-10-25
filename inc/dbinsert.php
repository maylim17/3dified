<?php
    
    //connect to database
    $servername = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $dbname = "myDB";
    // Create connection
    $conn = new mysqli($servername, $dbuser, $dbpass, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    foreach ($products as $item) {
        $sql = "INSERT INTO Designs (title, description, price, username, ssurl, collection) VALUES ('{$item["title"]}', '{$item["description"]}', '{$item["price"]}', '{$item["username"]}', '{$item["img"]}', '$collectionname')";
        //echo $sql."<br>";
        if ($conn->query($sql) === TRUE) {
           echo "New record created successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();



?>
