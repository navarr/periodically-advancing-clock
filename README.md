# Periodically Advancing Clock (PSR-20)

This is an implementation of PSR-20 that provides a clock that advances one defined period with each call of `->now()`

## Installation

    composer require navarr/periodically-advancing-clock:@dev

## Usage

```php
use DateInterval;
use DateTimeImmutable;
use Navarr\PeriodicAdvancement\AdvancingClock;

// ...

$date = new DateTimeImmutable('2021-02-20');
$period = new DateInterval('P1M');
$clock = new SpecificTime(startDate: $date, period: $period);

// 2021-02-20
echo $clock->now()->format('Y-m-d');

// 2021-03-20
echo $clock->now()->format('Y-m-d');
```
