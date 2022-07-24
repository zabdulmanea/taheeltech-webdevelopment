<?php

# <--------------------------------------->
#Bottom Left Triangle
function BLTriangle($tri_high)
{
    $output = '';

    for ($i = 0; $i < $tri_high; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            $output .= '*';
        }
        $output .= '<br>';
    }
    return $output;
}

# <--------------------------------------->
#Top Left Triangle
function TLTriangle($tri_high)
{
    $output = '';

    for ($i = 0; $i < $tri_high; $i++) {
        for ($j = $tri_high; $j > $i; $j--) {
            $output .= '*';
        }
        $output .= '<br>';
    }
    return $output;
}

# <--------------------------------------->
#Bottom Right Triangle
function BRTriangle($tri_high)
{
    $output = '';

    for ($i = 0; $i < $tri_high; $i++) {
        for ($j = $tri_high - 1; $j > $i; $j--) {
            $output .= '&nbsp;';
        }
        for ($k = 0; $k <= $i; $k++) {
            $output .= '*';
        }
        $output .= '<br>';
    }
    return $output;
}

# <--------------------------------------->
#Up Triangle
function UTriangle($tri_high)
{
    $output = '';
    $stars_counter = 0;

    for ($i = 0; $i < $tri_high; $i++) {
        for ($j = $tri_high - 1; $j > $i; $j--) {
            $output .= '&nbsp;';
        }
        $stars_counter++;
        $output .= str_repeat('*', $stars_counter + $i) . '<br>';
    }
    return $output;
}

# <--------------------------------------->
#Down Triangle
function DTriangle($tri_high)
{
    $output = '';

    for ($i = 1; $i <= $tri_high; $i++) {
        for ($j = 1; $j < $i; $j++) {
            $output .= '&nbsp;';
        }
        for ($k = $tri_high * 2 - $i; $k >= $i; $k--) {
            $output .= '*';
        }
        $output .= '<br>';
    }
    return $output;
}
