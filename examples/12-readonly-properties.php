<?php

class MyClass
{
    public function __construct(?string $message = null)
    {   
    }
}

class ReadOnlyProperties
{
    public function __construct(
        public readonly string $foo,
        public readonly MyClass $bar = new MyClass(message: 'Hello!')
    )
    {
    }
}

$test = new ReadOnlyProperties(foo: 'bar');

try {
    $test->foo = 'baz';
} catch (Error $e) {
    echo'Caught Error: ' . $e->getMessage() . PHP_EOL;
}

// However, objects are as always mutable, as they are passed by reference.
// You can change the value of the property, but you cannot change the object instance.
$test->bar->message = 'Message was changed';

echo $test->bar->message . PHP_EOL;
