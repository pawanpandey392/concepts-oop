<?php

/**
* Clousers
*
* @return string
*/

$user = "Philip";
 
// Create a Closure
$greeting = function() use ( $user ) {
	echo "Hello $user <br>";
};

// Greet the user
$greeting(); // Returns "Hello Philip"

function greetingsMessage( $user ) 
{
	return 'This is a greeting message to ' . $user . '<br>';
}

$anonymousGreetingsMessage = function() use ( $user )
{
	return 'This is a greeting message to ' . $user . '<br>';
};

echo greetingsMessage( 'Mr. Joe' );
echo $anonymousGreetingsMessage();


/**
*	Closures Functions With Reference Variable
*
*/

// Set counter
$i = 0;
$closure = function () use ( $i ){ $i++; };
$closure();
echo $i;
echo '<br>';
// Reset count
$i = 0;
$closure = function () use ( &$i ){ $i++; };
$closure();
echo $i;

echo '<br>';

/**
*	Array Walk Functions With Closures
*/

$users = array("John", "Jane", "Sally", "Philip");
 
// Pass the array to array_walk
array_walk($users, function ( $name ) {
	echo "Hello $name<br>";
});