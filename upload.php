<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nameOfProduct = trim($_POST["nameOfProduct"]);
    $designURL = trim($_POST["designURL"]);
    $description = trim($_POST["description"]);


    if ($nameOfProduct == "" OR $designURL == "" OR $description == "") {
        echo "You must specify a value for Name of Product, 3D design file URL, and description.";
        exit;
    }

    foreach( $_POST as $value ){
        if( stripos($value,'Content-Type:') !== FALSE ){
            echo "There was a problem with the information you entered.";    
            exit;
        }
    }


    header("Location: upload.php?status=thanks");
    exit;
}
?><?php 
$pageTitle = "Contact Mike";
$section = "contact";
include('inc/header.php'); ?>

    <div class="section page">

        <div class="wrapper">

            <h1>Upload</h1>

            <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
                <p>Thanks for your design! We&rsquo;ll post it shortly!</p>
            <?php } else { ?>

                <p>We&rsquo;d love to see designs from you! Complete the form to submit your design.</p>

                <form method="post" action="upload.php">

                    <table>
                        <tr>
                            <th>
                                <label for="nameOfProduct">Name of Product</label>
                            </th>
                            <td>
                                <input type="text" name="nameOfProduct" id="nameOfProduct">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="designURL">3D Design file URL</label>
                            </th>
                            <td>
                                <input type="text" name="designURL" id="designURL">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="description">Description</label>
                            </th>
                            <td>
                                <textarea name="description" id="description"></textarea>
                            </td>
                        </tr> 
                    </table>
                    <input type="submit" value="Send">

                </form>

            <?php } ?>

        </div>

    </div>

<?php include('inc/footer.php') ?>