
<?php

class Car
{
public $color;
public $year;
public $manufactured;
public $engine;


public function __construct( $color, $year, $manufactured,  EngineInterface $engine){

	$this-> color=$color;
	$this-> year=$year;
	$this-> manufactured=$manufactured;
	$this-> engine=$engine;

	}


public function startEngine(){
$this-> engine -> on();
/* куча кода */
}

public function stopEngine(){
	$this-> engine -> off();
	/* куча кода */

}

} /*------ end class Car--------- */



/*---inerface----- */

interface EngineInterface {
public function on();
 public function off();
}



class Engine_1 implements EngineInterface {

	public function on(){
	echo 'Gooooo Engine__111';
	}
	public function off(){
		echo 'Stooooooop Engine__11';
	}

}

class anotherEngine implements EngineInterface{

		public function on(){
		echo 'Goooooo AnotherEngine__222';
		}
		public function off(){
			echo 'Stooop AnotherEngine__222';
		}
}

$engine1=new Engine_1;
$anotherEngine=new anotherEngine;

$myCar=new Car('BLUE', 1971 , 'MERSEDES', $engine1);

echo $myCar->stopEngine();
echo $myCar->startEngine();
//echo $myCar->year;


// var_dump($myCar);
?>





