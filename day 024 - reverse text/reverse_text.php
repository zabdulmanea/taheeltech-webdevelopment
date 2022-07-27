<?php

function revstr_char($str)
{
    #for UTF-8
    $len = strlen($str);
    $rev_str = '';

    for ($i = $len - 1; $i >= 0; $i--)
        $rev_str .= mb_substr($str, $i, 1);
    return $rev_str;
}

function revstr_word($str)
{
    return join(" ", array_reverse(explode(" ",$str)));
}
