<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="design.php?collection=hobbies&id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '">';
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

$products = array();
$products[101] = array(
	"title" => "Fishing Rod",
	"description" => "Sturdy and lightweight!",
	"price" => 15,
	"username" => "Andy",
    "img" => "img/hobbies/1.jpeg"
);
$products[102] = array(
    "title" => "Whistle",
    "description" => "Easily customisable!",
    "price" => 2,
    "username" => "Andy",
    "img" => "img/hobbies/2.jpeg"
);
$products[103] = array(
    "title" => "Poker Chips",
    "description" => "A must-have for any poker enthusiast!",
    "price" => 20,
    "username" => "Andy",
    "img" => "img/hobbies/3.jpeg"
);
$products[104] = array(
    "title" => "Dumbbells",
    "description" => "10kg Dumbbells",
    "price" => 12,
    "username" => "Andy",
    "img" => "img/hobbies/4.jpeg"
);
$products[105] = array(
    "title" => "Aquarium",
    "description" => "40cm by 40cm by 50cm, perfect for any home.",
    "price" => 25,
    "username" => "Andy",
    "img" => "img/hobbies/5.jpeg"
);
$products[106] = array(
    "title" => "Spade",
    "description" => "Gardening made easy!",
    "price" => 18,
    "username" => "Andy",
    "img" => "img/hobbies/6.jpeg"
);
$products[107] = array(
    "title" => "Hoe",
    "description" => "Gardening made easy!",
    "price" => 18,
    "username" => "Andy",
    "img" => "img/hobbies/7.jpeg"
);
$products[108] = array(
    "title" => "Pickaxe",
    "description" => "For breaking up those pesky lumps of earth in your garden.",
    "price" => 20,
    "username" => "Andy",
    "img" => "img/hobbies/8.jpeg"
);

?>