<?php

function revstr_char($str)
{
    $temp= mb_detect_encoding($str);
    if($temp){
        return 'Success1';
    }
    // if (mb_detect_encoding($str) != 'UTF-8') {
    //     #built-in function doesn't support UTF-8
    //     return strrev($str);
    // } else {
    //     #for UTF-8
    //     $len = strlen($str);
    //     $rev_str = '';

    //     for ($i = $len - 1; $i >= 0; $i--)
    //         $rev_str .= mb_substr($str, $i, 1);
    //     return $rev_str;
    // }
    return 'Success2';
}

function revstr_word($str)
{
    return join(" ", array_reverse(explode(" ",$str)));
}
