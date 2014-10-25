<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";
    $login = "true";

    $output = $output . "<li>";
    $output = $output . '<a href="product.php?login=' . $login . '&collection=Gifts&id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '">';
    $output = $output . "<p>".$product['title']."</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

$products = array();
$products[101] = array(
    "title" => "The Ted Mosby",
    "description" => "Because normal gifts are too mainstream",
    "price" => 59,
    "username" => "Wilson",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/gifts/1.jpeg"
);
$products[102] = array(
    "title" => "The Barney Stintson",
    "description" => "Quite a Horny Chap",
    "price" => 39,
    "username" => "Joyce",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/gifts/2.jpeg"
);
$products[103] = array(
    "title" => "Holey Moley",
    "description" => "A house for people who love the rain",
    "price" => 28,
    "username" => "Xiuhan",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/gifts/3.jpeg"
);
$products[104] = array(
    "title" => "Customized iPhone 5 case",
    "description" => "Because normal covers are too mainstream",
    "price" => 19,
    "username" => "Anghui",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/gifts/4.jpeg"
);
$products[105] = array(
    "title" => "Wired Case",
    "description" => "To be connected in a wireless world",
    "price" => 19,
    "username" => "Jun Yi",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/gifts/5.jpeg"
);
$products[106] = array(
    "title" => "3D words of wisdom",
    "description" => "For those who prefer not to write",
    "price" => 15,
    "username" => "Victor",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/gifts/6.jpeg"
);
$products[107] = array(
    "title" => "Winter Wonderland",
    "description" => "Perfect Christmas Gift",
    "price" => 18,
    "username" => "Yohanus",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/gifts/7.jpeg"
);
$products[108] = array(
    "title" => "Pumpkin Candleholder",
    "description" => "Awesome Halloween gift",
    "price" => 18,
    "username" => "Zong",
    "paypal" => "RK4LQQB9L7K6L",
    "img" => "img/gifts/8.jpeg"
);

?>