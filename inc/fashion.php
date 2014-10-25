<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="product.php?login=' . $login . '&collection=Fashion&id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '">';
    $output = $output . "<p>".$product['title']."</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

$products = array();
$products[101] = array(
    "title" => "Hearty Necklace",
    "description" => "Guaranteed to break your heart",
    "price" => 19,
    "username" => "Acer",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/fashion/1.jpeg"
);
$products[102] = array(
    "title" => "Cool Hat",
    "description" => "Keeps you cool in the summer!",
    "price" => 6,
    "username" => "Andai",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/fashion/2.jpeg"
);
$products[103] = array(
    "title" => "Hole-ly Bracelet",
    "description" => "A Bracelet, plus the holes!",
    "price" => 8,
    "username" => "May",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/fashion/3.jpeg"
);
$products[104] = array(
    "title" => "Spider Heels",
    "description" => "For roaming around the web",
    "price" => 28,
    "username" => "Melvyn",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/fashion/4.jpeg"
);
$products[105] = array(
    "title" => "Invisible Heels",
    "description" => "Less is more.",
    "price" => 38,
    "username" => "Daniel",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/fashion/5.jpeg"
);
$products[106] = array(
    "title" => "Cape",
    "description" => "Nuff Said.",
    "price" => 188,
    "username" => "Andy",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/fashion/6.jpeg"
);
$products[107] = array(
    "title" => "Classy Bow Tie",
    "description" => "To match that suit",
    "price" => 9,
    "username" => "Nigel",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/fashion/7.jpeg"
);
$products[108] = array(
    "title" => "Cool Ring",
    "description" => "A customizable Ring",
    "price" => 18,
    "username" => "Aaron",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/fashion/8.jpeg"
);


?>