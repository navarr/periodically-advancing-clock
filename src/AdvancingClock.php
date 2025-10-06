<?php

/**
 * @author    Navarr Barnier <me@navarr.me>
 * @copyright 2021 Navarr Barnier. All rights reserved.
 */

declare(strict_types=1);

namespace Navarr\PeriodicAdvancement;

use DateInterval;
use DateTimeImmutable;
use Psr\Clock\ClockInterface;

class AdvancingClock implements ClockInterface
{
    private DateTimeImmutable $date;

    public function __construct(private DateInterval $period, ?DateTimeImmutable $startDate = null)
    {
        $this->date = $startDate ?? new DateTimeImmutable('now');
    }

    public function now(): DateTimeImmutable
    {
        $result = $this->date;
        $this->date = $result->add($this->period);
        return $result;
    }
}
