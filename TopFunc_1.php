<?php

$items = [
	[
		"name" => "John",
		"surname" => "Doedddd",
		"age" => 15,
		"email" => "John@gmail.com"

	],
	[
		"name" => "Jane",
		"surname" => "DANE",
		"age" => 25,
		"email" => "Jane@gmail.com"

	],
	[
		"name" => "Mary",
		"surname" => "CARY",
		"age" => 35,
		"email" => "Mary@gmail.com"
	]



];
/*
$emailS=[];

foreach ($items as $user) {
	$emailS[]=$user['email'];
}


$enameS=[];

foreach ($items as $user) {
	$enameS[]=$user['name'];
}
 */


// var_dump($enameS, $emailS);

function map($items, $func)
{
	$results = [];

	foreach ($items as $item) {
		$results[] = $func($item);
	}
	var_dump($results);
}



/* function map*/
$FuncEmail = function ($user) {
	return $user['email'];

};

$FuncName = function ($user) {
	return $user['name'];
};

$FuncSur = function ($user) {
	return $user['surname'];
};

$email = [];
$names = [];
$Surnames = [];

$email = map($items, $FuncEmail);
$names = map($items, $FuncName);
$Surnames = map($items, $FuncSur);

// var_dump($email);
// var_dump($names);
// var_dump($Surnames);

?>
