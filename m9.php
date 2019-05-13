<?php


abstract class Animal
{

	public abstract function makeSound();
	public $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}
}


class Dog extends Animal
{
	public function makeSound()
	{
		echo "This is class" . __CLASS__ . " which doing GAFFFF";
	}
}

class Cat extends Animal
{
	public function makeSound()
	{
		echo 'myao myao';
	}
}

class Pepa extends Animal
{
	public function makeSound()
	{
		echo 'HRU HRU HRU';
	}
}


$dog = new Dog('Butch');
$cat = new Cat('Murka');
$pepa = new Pepa('Nif');

echo $dog->makeSound();
echo '<br>';
echo $cat->getName() . ' doing ', $cat->makeSound();
echo '<br>';
echo $pepa->getName() . ' doing ', $pepa->makeSound();

 //$cat->makeSound()
