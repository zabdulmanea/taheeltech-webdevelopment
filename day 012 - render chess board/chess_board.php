<?php

function print_chessBoard()
{
    $chessize = 8;
    $black = '<div class="black chess_cell"></div>';
    $white = '<div class="white chess_cell"></div>';
    $chess_board = '';
    for ($i = 0; $i < $chessize; $i++) {
        for ($j = 0; $j < $chessize; $j++) {
            $x = $i + $j;
            if ($x % 2 == 0) {
                $chess_board .= $white;
            } else {
                $chess_board .= $black;
            }
        }
        $chess_board .= '<br>';
    }

    return $chess_board;
}
