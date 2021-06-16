<?php

/**
* Callback/Callable Functions.
*
*/

function thisFuncTakesACallback($callbackFunc)
{
    echo "I'm going to call $callbackFunc!<br />";
    $callbackFunc();
}

function thisFuncGetsCalled()
{
    echo "I'm a callback function!<br />";
}

thisFuncTakesACallback( 'thisFuncGetsCalled' );
