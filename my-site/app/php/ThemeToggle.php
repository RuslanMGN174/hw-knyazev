<?php

namespace App;

class ThemeToggle
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

    public function getThemeClass(): string
    {
        $timeCurrent = $this->timeCurrent;
        $timeNightStart = $this->timeNightStart;
        $timeNightEnd = $this->timeNightEnd;

        if ($timeCurrent >= $timeNightStart || $timeCurrent < $timeNightEnd) {
            $themeClass = 'dark-theme';
        } else {
            $themeClass = '';
        }
        return $themeClass;
    }
}