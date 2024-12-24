<?php

namespace App\Helpers;

class TextHelper
{
    public static function excerpt($text, $limit = 100)
    {
        $words = explode(' ', $text);
        if (count($words) > $limit) {
            return implode(' ', array_slice($words, 0, $limit)) . '...';
        }

        return $text;
    }
}
