<?php

/**
 *	Single Responsibility Principle (SRP)
 *
 *	A class should have one and only one reason to change, meaning that a class should have only one job.
 */
require_once '../../error-reporting/index.php';

class RawArray
{
	public $data = [32, 54, 76, 89, 21, 23, 67, 88];

	public function __construct()
	{
		return $this->data;
	}
}

class PrepareData
{
	public $data;

	public function __construct( RawArray $array )
	{
		foreach ( $array as $key => $value )
		{
			if ( ! $value ) unset( $array[ $key ] );
		}
		return $this->data = $array->data;
	}
}

class Responses
{
	private $data;

	public function __construct( PrepareData $args )
	{
		$this->data = $args->data;
	}

	public function jsons()
	{
		return $this->display( json_encode( $this->data ) );
	}

	public function strings()
	{
		return $this->display( implode( ', ', $this->data ) );
	}

	public function arrays()
	{
		return $this->display( $this->data );
	}

	public function display( $args )
	{
		echo '<pre>';print_r( $args );
	}
}

$prepare = new Responses ( new PrepareData ( new RawArray ) );

echo '<br>json string will be printed.';
$prepare->jsons() . '<br>';

echo '<br>string will be printed.';
$prepare->strings() . '<br>';

echo '<br>array will be printed.';
$prepare->arrays() . '<br>';