<?php

// Example of explicit Stringable interface implementation
class HtmlString implements Stringable
{
    public function __construct(public string $html = '')
    {
    }

    public function __toString(): string
    {
        return $this->html;
    }
}

$html = new HtmlString('<h1>Hello World</h1>');
echo '$html is instance of Stringable: ' . ($html instanceof Stringable ? 'true' : 'false') . PHP_EOL;

// Example of implicit Stringable interface implementation
class ImplicitStringable
{
    public function __toString(): string
    {
        return 'Implicit stringable';
    }
}

$implicit = new ImplicitStringable();
echo '$implicit is instance of Stringable: ' . ($implicit instanceof Stringable ? 'true' : 'false') . PHP_EOL;
