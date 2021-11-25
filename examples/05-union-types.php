<?php

class HtmlString
{
    public function __toString()
    {
        return '<h1>Hello World!</h1>';
    }
}

function render(string|Stringable $string)
{
    echo $string . PHP_EOL;
}

render('Hello World!');
render(new HtmlString());

/**
 * This function returns false on error.
 * This function will actually never fail, this is just meant as an example.
 */
function trySomething(): int|false
{
    return rand(0, 100) > 100 ? false : 42;
}
