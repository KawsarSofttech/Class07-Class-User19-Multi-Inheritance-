<?php 	 

class Vehicle{

	public function speed()
	{
		echo "Speed should not be more than 50km/hr<br>";	
	}
	public function colour()
	{
		echo "Only Red color is allowed<br>";	
	}
}
$ad = new Vehicle();
$ad->speed();
$ad->colour();
?>