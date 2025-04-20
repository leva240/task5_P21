<?php

function alphabeticalOrder($str){

    $chars = str_split(string: $str);

    sort ($chars);

    return implode('', $chars);
};

$str = readline();

echo alphabeticalOrder($str);