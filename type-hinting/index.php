<?php 
/**
 * Type Hinting Explained By Example
 *	
 */

require_once '../error-reporting/index.php';

// Array type hinting
	function calcNumMilesOnFullTank( array $models )
	{
		dd( $models );
	}

	$models = array(
		array('Toyota', 12, 44),
		array('BMW', 13, 41)
	);

	// calcNumMilesOnFullTank( $models );



// Object type hinting
	class Car 
	{
		protected $driver;

		public function __construct( Driver $driver )
		{
			$this->driver = $driver;
		}

		public function display()
		{
			dd( $this->driver );
		}
	}

	class Driver {}

	$car1 = new Car( new Driver );
	// $car1 = new Car( $models );
	// $car1->display();


// Php 5 Type Hinting Example

	function checkDataType( $args )
	{
		if ( is_bool( $args ) ) return 'boolean';

		if ( is_null( $args ) ) return 'null';

		if ( is_string( $args ) ) return 'string';

		if ( is_float( $args ) ) return 'float';

		if ( is_int( $args ) ) return 'int';
	}

	echo checkDataType( true );



// Php 7 Type Hinting Example
	class Cars
	{
		protected $model;
		protected $hasSunRoof;
		protected $numberOfDoors;
		protected $price;

		public function setModel(string $model)
		{
			$this->model = $model;
		}

		public function setHasSunRoof(bool $value)
		{
			$this->hasSunRoof = $value;
		}

		public function setNumberOfDoors(int $value)
		{
			$this->numberOfDoors = $value;
		}

		public function setPrice(float $value)
		{
			$this->price = $value;
		}
	}

	$cars = new Cars;
	$cars->setPrice(32.4432);