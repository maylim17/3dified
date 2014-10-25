<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="design.php?collection=Fashion&id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '">';
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

$products = array();
$products[101] = array(
    "title" => "Designer Flats",
    "description" => "Make a fashion statement. Like a boss!",
    "price" => 59,
    "username" => "Andy",
    "img" => "img/fashion/1.jpeg"
);
$products[102] = array(
    "title" => "Cool Hat",
    "description" => "Keeps you cool in the summer!",
    "price" => 6,
    "username" => "Andy",
    "img" => "img/fashion/2.jpeg"
);
$products[103] = array(
    "title" => "Hole-ly Bracelet",
    "description" => "A Bracelet, plus the holes!",
    "price" => 8,
    "username" => "Andy",
    "img" => "img/fashion/3.jpeg"
);
$products[104] = array(
    "title" => "Spider Heels",
    "description" => "For roaming around the web",
    "price" => 28,
    "username" => "Andy",
    "img" => "img/fashion/4.jpeg"
);
$products[105] = array(
    "title" => "Invisible Heels",
    "description" => "Less is more.",
    "price" => 38,
    "username" => "Andy",
    "img" => "img/fashion/5.jpeg"
);
$products[106] = array(
    "title" => "Cape",
    "description" => "Nuff Said.",
    "price" => 188,
    "username" => "Andy",
    "img" => "img/fashion/6.jpeg"
);
$products[107] = array(
    "title" => "Classy Bow Tie",
    "description" => "To match that suit",
    "price" => 9,
    "username" => "Andy",
    "img" => "img/fashion/7.jpeg"
);
$products[108] = array(
    "title" => "Makers' Lab Key Chain",
    "description" => "A customizable key chain! So cool!",
    "price" => 18,
    "username" => "Andy",
    "img" => "img/fashion/8.jpeg"
);


?>