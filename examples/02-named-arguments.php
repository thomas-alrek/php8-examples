<?php

$items = ['foo', 'bar', 'baz'];

if (in_array(needle: 'foo', haystack: $items)) {
    echo 'Found foo!' . PHP_EOL;
}

// You can mix named and positional arguments.
// The caveat is that named arguments must come after all positional arguments.
if (in_array('bar', haystack: $items)) {
    echo 'Found bar!' . PHP_EOL;
}

// The order of the named arguments is not important.
if (in_array(haystack: $items, needle: 'baz')) {
    echo 'Found baz!' . PHP_EOL;
}

// This would throw an error:
// Fatal error: Uncaught Error: Unknown named parameter $foo
//in_array(foo: 'foo', bar: 'bar');
