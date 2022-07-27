<?php

function revstr_char($str)
{
    return 'Success';
}

function revstr_word($str)
{
    return join(" ", array_reverse(explode(" ",$str)));
}
