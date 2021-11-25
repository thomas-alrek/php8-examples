<?php

$a = ['a' => 'foo'];

$b = ['b' => 'bar'];

$c = ['c' => 'baz', ...$a, ...$b];

print_r($c);

// Numeric keys can be used in the array
// But this is not recommended unless you really know what you are doing.
$d = [
    'æøå',
    ...$c
];

print_r($d);
