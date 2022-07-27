<?php
// Reverse String by word
function revstr_word($str)
{
    return join(' ', array_reverse(explode(' ', $str)));
}

// Reverse String by character
function utf8_strrev_char($str)
{
    #built-in function doesn't support UTF-8 (doesn't support Arabic)
    // return strrev($str);

    # correct matching of UTF-8 encoded patterns
    preg_match_all('/./us', $str, $arr);
    return join('', array_reverse($arr[0]));
}