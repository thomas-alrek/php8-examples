<?php

class A
{
    public function __construct(
        public string $foo
    ) {
    }
}

$a = new A(foo: 'bar');

echo '$a->foo: ' . $a->foo . PHP_EOL;

class B
{
    public string $bar;

    public function __construct(
        public string $foo,
        string $bar
    ) {
        $this->bar = $bar;
    }
}

$b = new B(foo: 'bar', bar: 'baz');

echo '$b->foo: ' . $b->foo . ', $b->bar: ' . $b->bar . PHP_EOL;

class C
{
    public function __construct(
        public string $foo = 'foo',
        public string $bar = 'bar'
    ) {
    }
}

$c = new C();

echo '$c->foo: ' . $c->foo . ', $c->bar: ' . $c->bar . PHP_EOL;
