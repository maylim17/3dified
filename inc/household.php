<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";
    $login = "true";

    $output = $output . "<li>";
    $output = $output . '<a href="product.php?login=' . $login . '&collection=Household&id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '">';
    $output = $output . "<p>".$product['title']."</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

$products = array();
$products[101] = array(
	"title" => "Stylish Ornament",
	"description" => "If you say so..",
	"price" => 10,
	"username" => "Kenneth",
    "paypal" => "M9DLBUJMGBTUL",
    "img" => "img/household/1.jpeg"
);
$products[102] = array(
    "title" => "Skull Ornament",
    "description" => "A stylish 3D printed skull",
    "price" => 40,
    "username" => "Guest",
    "paypal" => "M9DLBUJMGBTUL",
    "img" => "img/household/2.jpeg"
);
$products[103] = array(
    "title" => "Butterfly Stool",
    "description" => "A sturdy stool",
    "price" => 18,
    "username" => "Andai",
    "paypal" => "M9DLBUJMGBTUL",
    "img" => "img/household/3.jpeg"
);
$products[104] = array(
    "title" => "Shell Shaped Ornament",
    "description" => "A beautifully designed ornament",
    "price" => 10,
    "username" => "Melvyn",
    "paypal" => "M9DLBUJMGBTUL",
    "img" => "img/household/4.jpeg"
);
$products[105] = array(
    "title" => "Coffee Table",
    "description" => "A sturdy coffeetable",
    "price" => 50,
    "username" => "Acer",
    "paypal" => "M9DLBUJMGBTUL",
    "img" => "img/household/5.jpeg"
);
$products[106] = array(
    "title" => "Lamp",
    "description" => "A custom designed lamp",
    "price" => 18,
    "username" => "Daniel",
    "paypal" => "M9DLBUJMGBTUL",
    "img" => "img/household/6.jpeg"
);
$products[107] = array(
    "title" => "Tube Roller",
    "description" => "Squeeze out every last drop",
    "price" => 18,
    "username" => "Sandy",
    "paypal" => "M9DLBUJMGBTUL",
    "img" => "img/household/7.jpeg"
);
$products[108] = array(
    "title" => "Mechanical Clock",
    "description" => "To tell time",
    "price" => 18,
    "username" => "May",
    "paypal" => "M9DLBUJMGBTUL",
    "img" => "img/household/8.jpeg"
);

?>