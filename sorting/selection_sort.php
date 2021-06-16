<?php

$output = [5, 4, 3, 2, 1];
$array = [5, 4, 3, 2, 1];

for ($i = 0; $i < count($array) - 1; $i++) { 
	
	$pivot = $i;

	for ($j = $i + 1; $j < count($array); $j++) { 
		
		if( $array[$pivot] > $array[ $j ] ) {

			$temp = $array[ $pivot ];
			$array[ $pivot ] = $array[ $j ];
			$array[ $j ] = $temp;

		}

	}

}

echo '<pre>';
print_r($array);
print_r($output);
die;

?>