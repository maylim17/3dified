<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="design.php?collection=art&id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '">';
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

$products = array();
$products[101] = array(
	"title" => "Universe in a ball",
	"description" => "Holy Moley this looks good!",
    "price" => 28,
    "username" => "Andy",
    "img" => "img/art/1.jpeg"
);
$products[102] = array(
    "title" => "Alphabet Ball",
    "description" => "Isn't that sweet?",
    "price" => 28,
    "username" => "Andy",
    "img" => "img/art/2.jpeg"
);
$products[103] = array(
    "title" => "Moose",
    "description" => "A lovely moose.",
    "price" => 15,
    "username" => "Andy",
    "img" => "img/art/3.jpeg"
);
$products[104] = array(
    "title" => "Lamp",
    "description" => "Such beauty and elegance!",
    "price" => 15,
    "username" => "Andy",
    "img" => "img/art/4.jpeg"
);
$products[105] = array(
    "title" => "Horse caricature",
    "description" => "I bet this dude looks even better from the front.",
    "price" => 12,
    "username" => "Andy",
    "img" => "img/art/5.jpeg"
);
$products[106] = array(
    "title" => "Skull",
    "description" => "Nice. You gotta have one of these to join the cool club.",
    "price" => 30,
    "username" => "Andy",
    "img" => "img/art/6.jpeg"
);
$products[107] = array(
    "title" => "Turkey",
    "description" => "For thanksgiving.",
    "price" => 28,
    "username" => "Andy",
    "img" => "img/art/7.jpeg"
);
$products[108] = array(
    "title" => "Model of a Cow",
    "description" => "Nothing screams class like a gigantic cow.",
    "price" => 48,
    "username" => "Andy",
    "img" => "img/art/8.jpeg"
);

?>