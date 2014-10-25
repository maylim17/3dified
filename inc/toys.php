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
    "img" => "https://drive.google.com/uc?export=view&id=0B0U8rhej0Qg8TEdqUHNTM1M4Q1U"
);
$products[102] = array(
    "title" => "Makers' Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
    "price" => 18,
    "username" => "Andy",
    "img" => "https://drive.google.com/uc?export=view&id=0B0U8rhej0Qg8TEdqUHNTM1M4Q1U"
);
$products[103] = array(
    "title" => "Makers' Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
    "price" => 18,
    "username" => "Andy",
    "img" => "https://drive.google.com/uc?export=view&id=0B0U8rhej0Qg8TEdqUHNTM1M4Q1U"
);
$products[104] = array(
    "title" => "Makers' Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
    "price" => 18,
    "username" => "Andy",
    "img" => "https://drive.google.com/uc?export=view&id=0B0U8rhej0Qg8TEdqUHNTM1M4Q1U"
);
$products[105] = array(
    "title" => "Makers' Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
    "price" => 18,
    "username" => "Andy",
    "img" => "https://drive.google.com/uc?export=view&id=0B0U8rhej0Qg8TEdqUHNTM1M4Q1U"
);
$products[106] = array(
    "title" => "Makers' Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
    "price" => 18,
    "username" => "Andy",
    "img" => "https://drive.google.com/uc?export=view&id=0B0U8rhej0Qg8TEdqUHNTM1M4Q1U"
);
$products[107] = array(
    "title" => "Makers' Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
    "price" => 18,
    "username" => "Andy",
    "img" => "https://drive.google.com/uc?export=view&id=0B0U8rhej0Qg8TEdqUHNTM1M4Q1U"
);
$products[108] = array(
    "title" => "Makers' Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
    "price" => 18,
    "username" => "Andy",
    "img" => "https://drive.google.com/uc?export=view&id=0B0U8rhej0Qg8TEdqUHNTM1M4Q1U"
);

?>