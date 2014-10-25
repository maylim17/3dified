<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="design.php?id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '">';
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

$products = array();
$products[101] = array(
    "title" => "Whistle",
    "description" => "Easily customisable!",
    "price" => 2,
    "username" => "Andy",
    "img" => "img/hobbies/2.jpeg"
);
$products[102] = array(
    "title" => "Wedding",
    "description" => "Isn't that sweet?",
    "price" => 28,
    "username" => "Andy",
    "img" => "img/art/2.jpeg"
);
$products[103] = array(
    "title" => "Psychedelic",
    "description" => "Nice. You gotta have one of these to join the cool club.",
    "price" => 30,
    "username" => "Andy",
    "img" => "img/art/6.jpeg"
);
$products[104] = array(
    "title" => "Poker Chips",
    "description" => "A must-have for any poker enthusiast!",
    "price" => 20,
    "username" => "Andy",
    "img" => "img/hobbies/3.jpeg"
);
$products[105] = array(
    "title" => "Model of a Cow",
    "description" => "Nothing screams class like a gigantic cow.",
    "price" => 48,
    "username" => "Andy",
    "img" => "img/art/8.jpeg"
);

?>