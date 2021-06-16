<?php

// Recursion Example.
$arr = [
		'name' => 'pawan pandey',
		'class' => '12 A',
		'roll_number' => '12',
		'details' => [
					'fathers_name' => 'Bhuwan chandra pandey',
					'mothers_name' => 'kamla pandey',
					'siblings' => [
								'count' => 2,
								'siblng_one' => 'gaurav pandey',
								'siblng_two' => 'mamta pandey'
							]
				]
	];

echo '<pre>';print_r( $arr );echo '<br>';

function traverse( $variable )
{
	foreach ($variable as $key => $value) {
		if ( is_array( $value ) ) {		// If array, then function calls itself. 
			traverse( $value ); 
		} else {
			echo $key . ' -> ' . $value . '<br>';
		}
	}
}

// Calling traverse function.
traverse( $arr );