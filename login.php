
<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     //receive username and password
//     $username = trim($_POST["username"]);
//     $password = trim($_POST["password"]);
// }
?>
<?php 


$pageTitle = "Login to 3dified";
$section = "Login";
include('inc/header.php'); 

?>


    <div class="section page">

        <div class="wrapper">

            <h1>Login to 3Dified</h1>


                <form method="post" action='<?php echo "login-process.php" ?>'>

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



        </div>

    </div>

<?php include('inc/footer.php') ?>