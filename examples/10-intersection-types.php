<?php

interface A
{
    public function foo();
}

interface B
{
    public function bar();
}

class ImplementsA implements A
{
    public function foo()
    {
        echo 'foo' . PHP_EOL;
    }
}

class ImplementsAB extends ImplementsA implements B
{
    public function bar()
    {
        echo 'bar' . PHP_EOL;
    }
}

function testIntersectionType (A&B $ab) {
   $ab->foo();
   $ab->bar();
}

try {
    $a = new ImplementsA();
    testIntersectionType($a);
} catch (TypeError $e) {
    echo 'Caught TypeError: ' . $e->getMessage() . PHP_EOL;
}

// This works, because $ab implements both the interfaces
// satisfying the intersection type constraint.
$ab = new ImplementsAB();
testIntersectionType($ab);