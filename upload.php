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
$pageTitle = "Upload Design";
$section = "design";
include('inc/header.php'); ?>

    <div class="section page">

        <div class="wrapper">

            <h1>Upload Your Design</h1>

            <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
                <p>Thank you for your design! We&rsquo;ll post it shortly!</p>
            <?php } else { ?>

                <p>We&rsquo;d love to see designs from you! Complete the form to submit your design.</p>

                <form method="post" action="upload.php">

                    <table>
                        <tr>
                            <th>
                                <label for="nameOfProduct">Design Title</label>
                            </th>
                            <td>
                                <input type="text" name="nameOfProduct" id="nameOfProduct">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="designURL">STL File URL</label>
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
                    <input type="submit" value="Submit">

                </form>

            <?php } ?>

        </div>

    </div>

<?php include('inc/footer.php') ?>