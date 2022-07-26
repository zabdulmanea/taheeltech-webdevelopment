<?php

/*
Factorial of positive Number
*/

use function PHPSTORM_META\type;

function Factorial($num)
{
    if (isset($num) && $num != NULL) {
        if ($num < 0) return 'Number should be positive or zero';
        if ($num == 0 || $num == 1) return 1;
        return $num-- * Factorial($num);
    }
}
