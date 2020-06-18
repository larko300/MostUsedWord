<?php

function mostUsedWord(string $text): string
{
    $text = strtolower($text);
    $text = trim($text);
    $words = explode(' ', $text);
    $array = array_count_values($words);
    return array_search(max($array), $array);
}
