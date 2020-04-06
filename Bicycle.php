<?php
include "Vehicle.php";
class Bicycle extends Vehicle{

	public function ringBell()
	{
		echo "Ring bell for Cycle is Mandatory<br>";
	}

}
$ad = new Bicycle();
// $ad->speed();
// $ad->colour();
$ad->ringBell();

?>