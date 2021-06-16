<?php

/**
* Lambda (Anonymous Functions)
*
* @return string
*/
$echo = function () {
	return 'this is an anonymous function. <br>';
};

echo $echo();



// Pass Lambda to function
function shout ( $message ) {
	echo $message();
}
 
// Calling the shout function
shout( function () {
	return "Hello world <br>";
});

shout( function() {
	return 'This is so good. <br>';
});


// Create Function 
$greeting = create_function('', 'echo "Create function calls hello world!";');
 
// Call function
$greeting();