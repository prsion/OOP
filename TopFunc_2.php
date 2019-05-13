<?php

$users = [
	[
		"name" => "John",
		"surname" => "Doe",
		"age" => 15,
		"email" => "John@gmail.com",
		"banned"=> true
	],
	[
		"name" => "Sharon",
		"surname" => "Stoune",
		"age" => 25,
		"email" => "Sharon@gmail.com",
		"banned"=> true
	],
	[
		"name" => "Mary",
		"surname" => "Cary",
		"age" => 35,
		"email" => "Mary@gmail.com",
		"banned"=> false
	]
];


$products = [
	[
		"product_title" => "chair",
		"product_price" => 2000,
		"in_stock" => false,
	],
	[
		"product_title" => "table",
		"product_price" => 500,
		"in_stock" => false,

	],
	[
		"product_title" => "computer",
		"product_price" => 200,
		"in_stock" => true,
	]

];

/*function map($items, $func)
{
	$results = [];

	foreach ($items as $item) {
		$results[] = $func($item);
	}
	var_dump($results);
}*/

function filter($items, $func){
	$results = [];

	foreach ($items as $item) {
		if ($func($item)) {
		$results[] = $item;
		}
	}
		return $results;
};

$bannedUsers = filter($users, function($user){
 return $user['banned'];
});


$product_in_stock = filter($products, function($product){
 return $product['in_stock'];
});


var_dump($bannedUsers, $product_in_stock);



/*$bannedUsers = [];
foreach ($users as $user) {
	if ($user['banned']) {
	$bannedUsers[] = $user;
	}
}
var_dump($bannedUsers);*/


/*$product_in_stock = [];

foreach ($products as $product)
 {
		if ($product['in_stock'])
	  {
		$product_in_stock[] = $product;
		}
}
var_dump($product_in_stock);*/




?>

