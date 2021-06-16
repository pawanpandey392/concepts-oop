<?php

$string = 'TheQuickBrownFoxJumpedOverTheLazyDog';
$count = [];
$frequency = [];
echo '<pre>';

/*for ($i = 0; $i < strlen($string); $i++)
{ 
	if ( $str[ $i ] === 'd' )
	{
		$count = $count + 1;
	}
}*/

    /* Initializes frequency of each character to 0 */
    for($i = 0; $i < 26; $i++)
    {
        $frequency[ $i ] = 0;
    }
	

    /* Finds total number of occurrences of each character */
    for($i = 0; $i < strlen($string); $i++)
    {
        /* If the current character is lowercase alphabet */
        if( $string[ $i ] >= 'a' && $string[ $i ] <= 'z' )
        {
            $frequency[ $string[ $i ] - 97 ]++;
        }
        elseif( $string[ $i ] >= 'A' && $string[ $i ]<='Z' )
        {
            $frequency[ $string[ $i ] - 65 ]++;
        }
    }

    /*
     * Prints the frequency of all characters in the string
     */
    printf("<br>Frequency of all characters in the given string: <br>");

    
    
    for( $i = 0; $i < 26; $i++ )
    {
        /* If the current character is in given string */
        if( $frequency[ $i ] != 0 )
        {
            printf( "%c = %d <br> ", ( $i + 97 ), $frequency[ $i ] );
        }
    }
    // print_r($frequency);
    die;