<?php
function FizzBuzz($from,$to) 
{
    if ( ! is_int($from) ||  ! is_int($to) ) return "Paramater should be integer number";
    if ( $from < 1 ||  $to < 1 ) return "Paramater should be positive number and not zero";
    
    $ret = '';   
    for ($i=$from;$i<=$to;$i++) 
    {
        if     ( $i % 15 == 0 ) $ret .= 'FizzBuzz ';
        elseif ( $i % 3  == 0 ) $ret .= 'Fizz ';
        elseif ( $i % 5  == 0 ) $ret .= 'Buzz ';
        else                    $ret .= $i.' ';
    }    
    return $ret;    
}
?>