<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="product.php?collection=Toys&id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '">';
    $output = $output . "<p>".$product['title']."</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

$products = array();
$products[101] = array(
	"title" => "Cars",
	"description" => "Small cars for the family.",
	"price" => 10,
	"username" => "Andy",
    "img" => "img/toys/1.jpeg"
);
$products[102] = array(
    "title" => "Plumber",
    "description" => "Bob the builder",
    "price" => 8,
    "username" => "Andy",
    "img" => "img/toys/2.jpeg"
);
$products[103] = array(
    "title" => "Mario",
    "description" => "Say cheese!",
    "price" => 8,
    "username" => "Andy",
    "img" => "img/toys/3.jpeg"
);
$products[104] = array(
    "title" => "Cube",
    "description" => "Pretty cool huh!",
    "price" => 12,
    "username" => "Andy",
    "img" => "img/toys/4.jpeg"
);
$products[105] = array(
    "title" => "Frog",
    "description" => "Just a frog.",
    "price" => 6,
    "username" => "Andy",
    "img" => "img/toys/5.jpeg"
);
$products[106] = array(
    "title" => "Mechbot",
    "description" => "Hide yo kids, hide yo wife, hide yo husband.",
    "price" => 15,
    "username" => "Andy",
    "img" => "img/toys/6.jpeg"
);
$products[107] = array(
    "title" => "Makers Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
    "price" => 3,
    "username" => "Andy",
    "img" => "img/toys/7.jpeg"
);
$products[108] = array(
    "title" => "Makers Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
    "price" => 3,
    "username" => "Andy",
    "img" => "img/toys/8.jpeg"
);

?>