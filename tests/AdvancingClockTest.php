<?php

/**
 * @author    Navarr Barnier <me@navarr.me>
 * @copyright 2021 Navarr Barnier. All rights reserved.
 */

declare(strict_types=1);

namespace Navarr\SpecificTime\Test;

use DateInterval;
use DateTimeImmutable;
use Navarr\PeriodicAdvancement\AdvancingClock;
use PHPUnit\Framework\TestCase;

class AdvancingClockTest extends TestCase
{
    public function provideData()
    {
        return [
            'Daily Period' => ['2021-01-01', 'P1D', ['2021-01-01', '2021-01-02', '2021-01-03', '2021-01-04']],
            'Weekly Period' => ['2021-01-01', 'P1W', ['2021-01-01', '2021-01-08', '2021-01-15', '2021-01-22']],
            'Monthly Period' => ['2021-01-01', 'P1M', ['2021-01-01', '2021-02-01', '2021-03-01', '2021-04-01']],
        ];
    }

    /**
     * @dataProvider provideData
     */
    public function testAdvancement(string $startDate, string $period, array $resultDates): void
    {
        $startDate = new DateTimeImmutable($startDate);
        $interval = new DateInterval($period);

        $clock = new AdvancingClock(startDate: $startDate, period: $interval);

        foreach ($resultDates as $formattedExpectedDate) {
            $this->assertEquals($formattedExpectedDate, $clock->now()->format('Y-m-d'));
        }
    }
}
