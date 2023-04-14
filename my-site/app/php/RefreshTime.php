<?php

namespace Php;

class RefreshTime
{
    public function getRefreshTime
    (
        string $timeCurrent,
        string $timeNightStart,
        string $timeNightEnd
    ): int
    {
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
