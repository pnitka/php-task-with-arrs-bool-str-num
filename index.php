<?php

$numbers = [];
$strings = [];
$bools = [];
$arrs = [];

$arr = [
    20,
    30,
    40,
    50,
    'gdfh',
    'ijdnf',
    'dsagf',
    'jshdbc',
    false,
    true,
    true,
    false,
    [1,2,3],
    [5,7,9],
    [10,20,30]
];

foreach ($arr as $value) {
    if (is_int($value)) {
        $numbers[] = $value;
    }elseif (is_string($value)) {
        $strings[] = $value;
    }elseif (is_bool($value)) {
        $bools[] = $value;
    }elseif (is_int($value)) {
        $arrs[] = $value;
    }
}

var_dump($numbers);