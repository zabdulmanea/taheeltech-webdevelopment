<?php

function pyramid_multiplication_table($max_num)
{
    $multiplication_table = '';
    for ($row = 1; $row <= $max_num; $row++) {
        $multiplication_table .= '<tr>';
        for ($ncol = 1; $ncol <= $row; $ncol++) {
            $multiplication_table .= '<td><div class="multiplication_cell">' . $ncol . 'x' . $row .
                '<br>=<br><b>' . $ncol * $row . '</b></div></td>';
        }
        $multiplication_table .= '</tr>';
    }

    return $multiplication_table;
}

