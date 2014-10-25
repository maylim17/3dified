<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="design.php?collection=Fashion&id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

$products = array();
$products[101] = array(
	"title" => "3D Printed Dress",
	"description" => "A customizable dress! So Sexy!",
	"price" => 18,
	"username" => "Andy",
    "img" => "https://drive.google.com/uc?export=view&id=0B0U8rhej0Qg8TEdqUHNTM1M4Q1U"
);
$products[102] = array(
    "title" => "3D Printed Dress",
	"description" => "A customizable dress! So Sexy!",
	"price" => 18,
	"username" => "Andy",
    "img" => "../img/fashion/1.jpeg"
);
$products[103] = array(
    "title" => "3D Printed Dress",
	"description" => "A customizable dress! So Sexy!",
	"price" => 18,
	"username" => "Andy",
    "img" => "/img/fashion/1.jpeg"
);
$products[104] = array(
    "title" => "3D Printed Dress",
	"description" => "A customizable dress! So Sexy!",
	"price" => 18,
	"username" => "Andy",
    "img" => "/img/fashion/1.jpeg"
);
$products[105] = array(
    "title" => "3D Printed Dress",
	"description" => "A customizable dress! So Sexy!",
	"price" => 18,
	"username" => "Andy",
    "img" => "/img/fashion/1.jpeg"
);
$products[106] = array(
    "title" => "3D Printed Dress",
	"description" => "A customizable dress! So Sexy!",
	"price" => 18,
	"username" => "Andy",
    "img" => "/img/fashion/1.jpeg"
);
$products[107] = array(
    "title" => "3D Printed Dress",
	"description" => "A customizable dress! So Sexy!",
	"price" => 18,
	"username" => "Andy",
    "img" => "/img/fashion/1.jpeg"
);
$products[108] = array(
    "title" => "3D Printed Dress",
	"description" => "A customizable dress! So Sexy!",
	"price" => 18,
	"username" => "Andy",
    "img" => "/img/fashion/1.jpeg"
);

?>