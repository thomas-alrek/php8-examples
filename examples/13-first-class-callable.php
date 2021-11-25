<?php

$print = print_r(...);

$print('Hello World!');


// In the future, partial function application will also be supported
// It unfortunately didn't hit the 8.1 release
// Here is the proposed syntax:

/*
$double = array_map(fn ($value) => $value * 2, ...);
$mapped = $double(array: [1, 2, 3]); -> [2, 4, 6]
*/