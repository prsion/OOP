<?php

class Car
{

public $color;
public $year;
public $manufactured;

public function __construct($color, $year, $manufactured){

$this->changeColor($color);
$this->year=$year;
$this->manufactured=$manufactured;

}

public function changeColor($color){
	if (is_string($color)) {
		$this->color=$color;

  }
  // die("цвет должен быть строкой");

  }


  public function changeYear($year){
  $this->year=$year;

  }


  /**
   * return mixed
   */
  public function returnColor(){
// return $this->color;
 return $this->color;
}

public function returnYear(){
// return $this->color;
 return $this->year;

}

}

/*-----end class Car--------*/


$myCar = new Car("Blue","2018","Audi");

   $myCar->changeColor("Blue");
   $myCar->changeYear("1971");
  echo $myCar->manufactured;
  echo "<br>";
   echo $myCar->returnColor();
   echo "<br>";
	 echo $myCar->returnYear();


/*
echo $myCar->year;
$myCar->year= 2017;
$myCar->manufactured= "VVV";*/



/*foreach($myCar as $key => $value) {
	print "$key => $value" ;
	echo "<br>";

}
echo "\n";*/


// echo '$color';
// echo '$year';
// echo '$manufactured';

 ?>

