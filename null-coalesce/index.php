<?php

/*
 * Ternary operator
 *
*/
echo $count ? $count : 10;

echo '\n'

$count = 20;
echo $count ?: 10; 



/*
 * Null Coalesce Operator
 *
*/

// $a is not set
$b = 16;

echo $a ?? 2; // outputs 2
echo $a ?? $b ?? 7; // outputs 16
