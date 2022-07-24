<?php

function SimpleCalculator($no1, $no2, $operation)
{
    if (
        isset($no1) && isset($no2) && isset($operation)
        && !empty($no1) && !empty($no2) && !empty($operation)
    ) {
        $result = 0;
        $output = '';
        switch ($operation) {
            case 'sum':
                $result = $no1 + $no2;
                $output = 'ناتج الجمع يساوي ' . $result;
                break;
            case 'sub':
                $result = $no1 - $no2;
                $output = 'ناتج الطرح يساوي ' . $result;
                break;
            case 'multiplaction':
                $result = $no1 * $no2;
                $output = 'ناتج الضرب يساوي ' . $result;
                break;
            case 'division':
                $result = $no1 / $no2;
                $output = 'ناتج القسمة يساوي ' . $result;
                break;
            case 'reminder':
                $result = $no1 % $no2;
                $output = 'ناتج باقي القسمة يساوي ' . $result;
                break;
            default:
                $output = 'Wrong Arithmetic Operation!';
        }
        return $output;
    } else {
        echo '';
    }
}
