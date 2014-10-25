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
	"title" => "Skateboard",
	"description" => "Sturdy and lightweight!",
	"price" => 15,
	"username" => "Andy",
    "img" => "img/hobbies/1.jpeg"
);
$products[102] = array(
    "title" => "Guitar Frame",
    "description" => "Classy and unique!",
    "price" => 2,
    "username" => "Andy",
    "img" => "img/hobbies/2.jpeg"
);
$products[103] = array(
    "title" => "Ball of Plastic",
    "description" => "For kicking around.",
    "price" => 20,
    "username" => "Andy",
    "img" => "img/hobbies/3.jpeg"
);
$products[104] = array(
    "title" => "Skull",
    "description" => "Who doesn't like examining skulls?",
    "price" => 12,
    "username" => "Andy",
    "img" => "img/hobbies/4.jpeg"
);
$products[105] = array(
    "title" => "DNA",
    "description" => "Not exactly double helix, but it will do.",
    "price" => 25,
    "username" => "Andy",
    "img" => "img/hobbies/5.jpeg"
);
$products[106] = array(
    "title" => "Type and form",
    "description" => "Stencils and a paperweight combined",
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