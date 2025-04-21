<?php

function alphabeticalOrder(string $str): string{

    $chars = str_split(string: $str);

    sort ($chars);

    return implode('', $chars);
};

echo "введите строку:";
$str = readline();

echo alphabeticalOrder($str);