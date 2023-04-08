<?php

/**
 * @param string $timeCurrent
 * @param string $timeNightStart
 * @param string $timeNightEnd
 * @return string
 */
function getThemeClass(string $timeCurrent, string $timeNightStart, string $timeNightEnd): string
{
    if ($timeCurrent >= $timeNightStart || $timeCurrent < $timeNightEnd) {
        $themeClass = 'dark-theme';
    } else {
        $themeClass = '';
    }
    return $themeClass;
}