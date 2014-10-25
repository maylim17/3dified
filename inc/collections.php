<?php

function get_list_view_html($collection_id, $collection) {
    
    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="collection.php?collection=' . $collection["name"] . '">';
    $output = $output . '<img src="' . $collection["img"] . '" alt="' . $collection["name"] . '">';
    $output = $output . "<p>".$collection['name']."</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

$collections = array();
$collections[101] = array(
	"name" => "Household",
	"img" => "img/shirts/shirt-101.jpg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$collections[102] = array(
    "name" => "Lifestyle",
    "img" => "img/shirts/shirt-101.jpg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$collections[103] = array(
    "name" => "Gifts",
    "img" => "img/shirts/shirt-101.jpg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$collections[104] = array(
    "name" => "Collectibles",
    "img" => "img/shirts/shirt-101.jpg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$collections[105] = array(
    "name" => "Art",
    "img" => "img/shirts/shirt-101.jpg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$collections[106] = array(
    "name" => "Hobbies",
    "img" => "img/shirts/shirt-101.jpg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$collections[107] = array(
    "name" => "Toys",
    "img" => "img/shirts/shirt-101.jpg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$collections[108] = array(
    "name" => "Fashion",
    "img" => "img/shirts/shirt-101.jpg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large")
);

?>