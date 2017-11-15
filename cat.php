<?php
class Cat
{
	const SOUND = 'MEOW';
	private $name;

	function makeSound() {
		echo constant(get_class($this) . '::SOUND') . "\n"; // get constant depending on type of $this
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


class CrazyCat extends Cat {
	const SOUND = 'MOOOOOOOOOOOOOOOOOOOH!';
	private $crazyness;

	function __construct($name, $crazyness) {
		parent::__construct($name);
		$this->crazyness = $crazyness;
	}

	function willSheTryToKillMeInMySleep() {
		return ($this->crazyness > 100);
	}

	function adviceForHumans() {
		echo ($this->willSheTryToKillMeInMySleep()) ? "run you fooool!" : "chill bro, da kitteh is cool!";
	}
}

$myCrazyCat = new CrazyCat("Mini", 50);
$myCrazyCat->makeSound();
$myCrazyCat->adviceForHumans();

?>
