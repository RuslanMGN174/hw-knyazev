<?php

namespace Php;

class ThemeToggle
{
    public function getThemeClass
    (
        string $timeCurrent,
        string $timeNightStart,
        string $timeNightEnd
    ): string
    {
        if ($timeCurrent >= $timeNightStart || $timeCurrent < $timeNightEnd) {
            $themeClass = 'dark-theme';
        } else {
            $themeClass = '';
        }
        return $themeClass;
    }
}