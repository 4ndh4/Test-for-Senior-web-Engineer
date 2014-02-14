<?php
function FizzBuzzBazz($from,$to) 
{
    if ( ! is_int($from) ||  ! is_int($to) ) return "Paramater should be integer number";
    if ( $from < 1 ||  $to < 1 ) return "Paramater should be positive number and not zero";
    
    $ret = '';   
    for ($i=$from;$i<=$to;$i++) 
    {
        if ( ($i % 3) == 0 || ($i % 5) == 0 )
        {
            if ( ($i % 3) == 0 ) $ret .= 'Fizz';
            if ( ($i % 5) == 0 ) $ret .= 'Buzz';
        }
        else
        {
            if ( (($i-2) % 5 == 0 && ($i-1) % 3 == 0 ) ||
                 (($i-2) % 3 == 0 && ($i-1) % 5 == 0 ) )
            {
                $ret .= 'Bazz';
            }
            else
            {
                $ret .= $i;    
            }             
        }   
        $ret .= ' ';
    }
    return $ret;    
}
?>