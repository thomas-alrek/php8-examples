<?php

enum Weekday: int {
    case MONDAY = 1;
    case TUESDAY = 2;
    case WEDNESDAY = 3;
    case THURSDAY = 4;
    case FRIDAY = 5;
    case SATURDAY = 6;
    case SUNDAY = 0;

    public function name(): string {
        return match($this) {
            Weekday::FRIDAY => 'Friday',
            default => 'Not friday'
        };
    }
}

class Event {
    public function __construct(public Weekday $day) {
    }
}

$event = new Event(day: Weekday::MONDAY);
echo $event->day->name() . PHP_EOL;

$day = Weekday::from(5);
echo $day->name() . PHP_EOL;

try {
    $day = Weekday::from(7);
    echo $day->name() . PHP_EOL;
} catch (ValueError) {
    echo 'Invalid weekday' . PHP_EOL;
}

$day = Weekday::tryFrom(7);
echo $day?->name() ?? 'null' . PHP_EOL;