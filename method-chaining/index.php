<?php

echo '<pre>';
/**
*  Method Chaining
*/
class FakeString
{
	private $arguments;

	public function prepare( $arguments )
	{
		if ( ! empty( $arguments ) )
		{
			foreach ($arguments as $key => $value) 
			{
				if ( $value === '' )
				{
					unset( $arguments[ $key ] );
				}
			}
			$this->arguments = $arguments;
		}
		return $this;
	}

	public function append( $array )
	{
		if ( is_array( $array ) ) 
			$this->arguments = array_merge( $this->arguments, $array );

		return $this;
	}

	public function count()
	{
		return count( $this->arguments );
	}

}

$array = [
		'key_1' => 'key_1',
		'key_2' => 'key_2',
		'key_3' => '',
		'key_4' => 'key_4',
		'key_5' => '',
		'key_6' => 'key_6',
		'key_7' => 'key_7'
	];

$array1 = [
		'key_8' => 'key_8',
		'key_9' => 'key_9',
		'key_10' => 'key_10',
		'key_11' => 'key_11',
		'key_12' => 'key_12',
		'key_13' => 'key_13',
		'key_14' => 'key_14'
	];

$fakeString = new FakeString;

$response = $fakeString->prepare( $array )->append( $array1 )->count();

print_r( $response );die;
