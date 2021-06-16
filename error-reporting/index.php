<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function seperator( $args )
{
	echo '<br><br>';
	echo '******************************************' . '<br>';
	echo '*  ' . $args . '<br>';
	echo '******************************************' . '<br><br>';
}


function ddd( $args )
{
	echo '<pre>';print_r( $args );die;
}

function dd( $args )
{
	echo '<pre>';print_r( $args );
}