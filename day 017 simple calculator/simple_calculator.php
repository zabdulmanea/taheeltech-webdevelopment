<?php

function SimpleCalculator($no1, $no2, $operation)
{
    if (
        isset($no1) && isset($no2) && isset($operation)
        && !empty($no1) && !empty($no2) && !empty($operation)
    ) {
        $result=0;
        switch ($operation) {
            case 'sum':
                $result = $no1 + $no2;
                break;
            case 'sub':
                $result = $no1 - $no2;
                break;
            case 'multiplaction':
                $result = $no1 * $no2;
                break;
            case 'division':
                $result = $no1 / $no2;
                break;
            case 'reminder':
                $result = $no1 % $no2;
                break;
            default:
                $result = 'Wrong Arithmetic Operation!';
        }
        return $result;
    } else {
        echo '';
    }
}
// if (
//     isset($_POST['no1']) && isset($_POST['no2']) && isset($_POST['operation'])
//     && !empty($_POST['no1']) && !empty($_POST['no2']) && !empty($_POST['operation'])
// ) {
//     $no1 = $_POST['no1'];
//     $no2 = $_POST['no2'];
//     $operation = $_POST['operation'];
//     $result;
//     switch ($operation) {
//         case 'sum':
//             $result = $no1 + $no2;
//             break;
//         case 'sub':
//             $result = $no1 - $no2;
//             break;
//         case 'multiplaction':
//             $result = $no1 * $no2;
//             break;
//         case 'division':
//             $result = $no1 / $no2;
//             break;
//         case 'reminder':
//             $result = $no1 % $no2;
//             break;
//         default:
//             $result = 'Wrong Arithmetic Operation!';
//     }
//     return $result;
// } else {
//     echo 'ERROR';
// }
