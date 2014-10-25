<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="design.php?collection=Toys&id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

$products = array();
$products[101] = array(
	"title" => "Makers' Lab Key Chain",
	"description" => "A customizable key chain! So cool!",
	"price" => 18,
	"username" => "Andy",
    "img" => "img/shirts/shirt-101.jpg"
);
$products[102] = array(
    "title" => "Makers' Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
    "price" => 18,
    "username" => "Andy",
    "img" => "img/shirts/shirt-101.jpg"
);
$products[103] = array(
    "title" => "Makers' Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
    "price" => 18,
    "username" => "Andy",
    "img" => "img/shirts/shirt-101.jpg"
);
$products[104] = array(
    "title" => "Makers' Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
    "price" => 18,
    "username" => "Andy",
    "img" => "img/shirts/shirt-101.jpg"
);
$products[105] = array(
    "title" => "Makers' Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
    "price" => 18,
    "username" => "Andy",
    "img" => "img/shirts/shirt-101.jpg"
);
$products[106] = array(
    "title" => "Makers' Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
    "price" => 18,
    "username" => "Andy",
    "img" => "img/shirts/shirt-101.jpg"
);
$products[107] = array(
    "title" => "Makers' Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
    "price" => 18,
    "username" => "Andy",
    "img" => "img/shirts/shirt-101.jpg"
);
$products[108] = array(
    "title" => "Makers' Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
    "price" => 18,
    "username" => "Andy",
    "img" => "img/shirts/shirt-101.jpg"
);

?>