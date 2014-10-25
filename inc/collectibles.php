<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="product.php?login=' . $login . '&collection=Collectibles&id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '">';
    $output = $output . "<p>".$product['title']."</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

$products = array();
$products[101] = array(
    "title" => "Snowflake",
    "description" => "Painful when poked",
    "price" => 49,
    "username" => "Taylor",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/collectibles/1.jpeg"
);
$products[102] = array(
    "title" => "I want to see your",
    "description" => "Peacock cock cock",
    "price" => 69,
    "username" => "Nelson",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/collectibles/2.jpeg"
);
$products[103] = array(
    "title" => "Chewing glove",
    "description" => "In case your dentures fail on you",
    "price" => 19,
    "username" => "Danny",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/collectibles/3.jpeg"
);
$products[104] = array(
    "title" => "Limited Edition Artwork",
    "description" => "Yes, I don&rsquo;t understand as well.",
    "price" => 999,
    "username" => "Andai",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/collectibles/4.jpeg"
);
$products[105] = array(
    "title" => "Birds of a feather",
    "description" => "Flock together",
    "price" => 89,
    "username" => "Daniel",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/collectibles/5.jpeg"
);
$products[106] = array(
    "title" => "Elephants Never Forget",
    "description" => "To help you improve your memory",
    "price" => 99,
    "username" => "Melvyn",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/collectibles/6.jpeg"
);
$products[107] = array(
    "title" => "Darth Vader Head",
    "description" => "I am your father",
    "price" => 18,
    "username" => "Acer",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/collectibles/7.jpeg"
);
$products[108] = array(
    "title" => "Pokeball",
    "description" => "Gotta catchem all!",
    "price" => 19,
    "username" => "May",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/collectibles/8.jpeg"
);

?>