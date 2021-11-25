<?php

class NullSafe
{
    public function null(): ?static
    {
        return null;
    }
}

$instance = new NullSafe();

$value = $instance->null()?->null()?->null();

echo 'Value: ' . json_encode($value) . PHP_EOL;
