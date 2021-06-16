<?php

require_once '../error-reporting/index.php';

interface Car
{
	public function setModel( $name );

	public function getModel();
}

interface Vehicle
{
  public function setHasWheels($bool); 
 
  public function getHasWheels();
}

class MiniCar implements Car, Vehicle
{
	public function setModel( $name )
	{
		return 'set model function. ' . $name;
	}

	public function getModel()
	{
		return 'get model function.';
	}

	public function setHasWheels( $bool )
	{
		return 'set has wheels.';
	}

	public function getHasWheels()
	{
		return 'get has wheels.';
	}
}

$miniCar = new MiniCar;

print_r($miniCar);die;