<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //receive username and password
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
}
?>
<?php 
$pageTitle = "Login to 3dified";
$section = "Login";
include('inc/header.php'); ?>

    <div class="section page">

        <div class="wrapper">

            <h1>Contact</h1>

                <form method="post" action="login.php">

                    <table>
                        <tr>
                            <th>
                                <label for="username">Username</label>
                            </th>
                            <td>
                                <input type="text" name="username" id="username" value="<?php echo "$username";?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="password">Password</label>
                            </th>
                            <td>
                                <input type="password" name="password" id="password">
                            </td>
                        </tr>                   
                    </table>
                    <input type="submit" value="Login">

                </form>

                <?php
                    //connect to database
                    $servername = "http://172.22.113.201/";
                    $dbuser = "root";
                    $dbpass = "root";
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
                            echo "Login Successful";
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

        </div>

    </div>

<?php include('inc/footer.php') ?>