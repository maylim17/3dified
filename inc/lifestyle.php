<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="product.php?login=' . $login . '&collection=Lifestyle&id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '">';
    $output = $output . "<p>".$product['title']."</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

$products = array();
$products[101] = array(
	"title" => "Leaf shaped lamp cover",
	"description" => "Beatifully designed lamp cover",
	"price" => 18,
	"username" => "John",
    "paypal" => "M9DLBUJMGBTUL",
    "img" => "img/lifestyle/1.jpeg"
);
$products[102] = array(
    "title" => "Handphone Holder",
    "description" => "Holds phone",
    "price" => 18,
    "username" => "Donny",
    "paypal" => "M9DLBUJMGBTUL",
    "img" => "img/lifestyle/2.jpeg"
);
$products[103] = array(
    "title" => "Burger Ornament",
    "description" => "Please do not eat",
    "price" => 18,
    "username" => "Mary",
    "paypal" => "M9DLBUJMGBTUL",
    "img" => "img/lifestyle/3.jpeg"
);
$products[104] = array(
    "title" => "Iphone Cover",
    "description" => "Red phone cover",
    "price" => 18,
    "username" => "Andrew",
    "paypal" => "M9DLBUJMGBTUL",
    "img" => "img/lifestyle/4.jpeg"
);
$products[105] = array(
    "title" => "Lamp Cover",
    "description" => "Nuff said",
    "price" => 18,
    "username" => "Andreas",
    "paypal" => "M9DLBUJMGBTUL",
    "img" => "img/lifestyle/5.jpeg"
);
$products[106] = array(
    "title" => "Handphone Stand+Amp",
    "description" => "Holds phone. Amps Sound",
    "price" => 18,
    "username" => "Anderson",
    "paypal" => "M9DLBUJMGBTUL",
    "img" => "img/lifestyle/6.jpeg"
);
$products[107] = array(
    "title" => "Pencil Holder",
    "description" => "Blue pencil holder",
    "price" => 18,
    "username" => "Daniel",
    "paypal" => "M9DLBUJMGBTUL",
    "img" => "img/lifestyle/7.jpeg"
);
$products[108] = array(
    "title" => "Blue Spinwheel",
    "description" => "Cute little spinwheel",
    "price" => 18,
    "username" => "Ann",
    "paypal" => "M9DLBUJMGBTUL",
    "img" => "img/lifestyle/8.jpeg"
);

?>