<?php

$statusCode = 201;

// Note that the cases must be exhaustive.
// If you don't, you'll get a fatal error:
// Fatal Error: Uncaught UnhandledMatchError: Unhandled match case
// To ensure that you catch all cases, you can use a default case.
$message = match ($statusCode) {
    200, 300 => 'OK',
    404 => 'Not Found',
    500 => 'Internal Server Error',
    default => 'Unknown',
};

echo 'Message: ' . $statusCode . ' ' . $message . PHP_EOL;
