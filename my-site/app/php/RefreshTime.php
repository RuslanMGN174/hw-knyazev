<?php

namespace App;

class RefreshTime
{
    private string $timeCurrent;
    private string $timeNightStart;
    private string $timeNightEnd;

    public function __construct(string $timeNightStart, string $timeNightEnd)
    {
        $this->timeCurrent = date("h:i:s");
        $this->timeNightStart = $timeNightStart;
        $this->timeNightEnd = $timeNightEnd;

    }

    public function getRefreshTime(): int
    {
        $timeCurrent = $this->timeCurrent;
        $timeNightStart = $this->timeNightStart;
        $timeNightEnd = $this->timeNightEnd;

        if ($timeCurrent >= $timeNightStart) {
            $currentTillMidnight = strtotime(date("23:59:59")) - strtotime($timeCurrent);
            $afterMidnight = strtotime($timeNightEnd) - strtotime(date("00:00:00"));
            $refreshTime = $currentTillMidnight + $afterMidnight + 1;
        } elseif ($timeCurrent < $timeNightEnd) {
            $refreshTime = strtotime($timeNightEnd) - strtotime($timeCurrent);
        } else {
            $refreshTime = strtotime($timeNightStart) - strtotime($timeCurrent);
        }
        return $refreshTime;
    }
}