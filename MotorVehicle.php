<?php
include "Bicycle.php";
class MotorVehicle extends bicycle{

	public function sizeOfEngine()
	{
		echo "Medium size is a standard for this project<br>";
	}
	public function licencePlate()
	{
			echo "Licence Plate is Madatory for all<br>";
	}



}
$ad = new MotorVehicle();
$ad->sizeOfEngine();
$ad->licencePlate();




?>