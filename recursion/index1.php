<?php

// $count = 1;
function func( $count )
{
	$count++;

	if ( $count < 10 ) {
		func( $count );
	}

	echo $count;
}

func( 1 );
exit('here');