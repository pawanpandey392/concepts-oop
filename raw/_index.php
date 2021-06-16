<?php

include '../error-reporting/index.php';

echo '|----------------------- Character Frequency Method 1 -----------------------|';

function frequencyOfACharacterMethod1( $var = '' )
{
    $count = [ $var[0] => 0 ];
    $cnt = 0;
    $temp = [ 0 => $var[0] ];
    $a = $var[0];

    for ($j=0; $j < count( $count ); $j++) 
    {
        $keys = array_keys( $count );

        for ($k=0; $k < $j; $k++) $a = next($keys);

        $cnt = 0;
        for ($i=0; $i < strlen($var) ; $i++)
        {
            if($a == $var[$i]) {
                $cnt++;
            } elseif (!isset($count[$var[$i]])) {
                $count[$var[$i]]=0;
            }
        }
        $count[$a] = $cnt;            
    }
    echo '<pre>';print_r($count);
}

frequencyOfACharacterMethod1( 'aaabbbbcccccddffffffff' );

echo '<br><br><br>';

echo '|----------------------- Character Frequency Method 2 -----------------------|';

function frequencyOfACharacterMethod2( $var = '' )
{
    $array = [];

    for( $i = 0; $i < strlen( $var ); $i++ )
    {
        $count = 0;
        for( $j = 0; $j < strlen( $var ); $j++ )
        {
            if ( $var[ $i ] === $var[ $j ] )
            {
                $count++;
                $array[ $var[ $i ] ] = $count;
            }
        }
    }

    echo '<pre>';print_r($array);
}

frequencyOfACharacterMethod2( 'aaabbbbccccsdjfacobsifayofatuftauycddffffffffggggggg' );

echo '<br><br><br>';

echo '|----------------------- Character Frequency Method 3 -----------------------|';

function frequencyOfACharacterMethod3( $var = '' )
{
    $array = [];
    for( $i = 0; $i < strlen( $var ); $i++ )
    {
        if ( isset( $array[ $var[ $i ] ] ) ) $array[ $var[ $i ] ] += 1;
        else $array[ $var[ $i ] ] = 1;
    }

    echo '<pre>';print_r($array);die;
}

frequencyOfACharacterMethod3( 'aaabbbbcccccddffffffff' );