# Periodically Advancing Clock (PSR-20)
[![Latest Stable Version](http://poser.pugx.org/navarr/periodically-advancing-clock/v)](https://packagist.org/packages/navarr/periodically-advancing-clock)
[![Total Downloads](http://poser.pugx.org/navarr/periodically-advancing-clock/downloads)](https://packagist.org/packages/navarr/periodically-advancing-clock)
[![Latest Unstable Version](http://poser.pugx.org/navarr/periodically-advancing-clock/v/unstable)](https://packagist.org/packages/navarr/periodically-advancing-clock)
[![License](http://poser.pugx.org/navarr/periodically-advancing-clock/license)](https://packagist.org/packages/navarr/periodically-advancing-clock)  
![Tests](https://github.com/navarr/periodically-advancing-clock/actions/workflows/commit.yml/badge.svg)
![Code Coverage](https://codecov.io/gh/navarr/periodically-advancing-clock/branch/main/graph/badge.svg?token=BHTKOZZDR3)
[![Mutation score](https://img.shields.io/endpoint?style=flat&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Fnavarr%2Fperiodically-advancing-clock%2Fmain)](https://dashboard.stryker-mutator.io/reports/github.com/navarr/periodically-advancing-clock/main)

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
