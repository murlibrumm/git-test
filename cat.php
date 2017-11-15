<?php
class Cat
{
	const SOUND = 'MEOW';
	private $name;

	function makeSound() {
		echo self::SOUND . "\n";
	}

	function __construct($name) {
		$this->name = $name;
	}

	function getName() {
		return $this->name;
	}
}

echo Cat::SOUND . "\n";

$myCat = new Cat("Maxi");
$myCat->makeSound();
echo($myCat->getName());





?>
