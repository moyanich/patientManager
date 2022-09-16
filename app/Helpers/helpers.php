<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

if(! function_exists('hyphenate')) {
    function hyphenate($str) {
        return implode("-", str_split($str, 3));
    }
}

/**
 * Format Date
 */
if(! function_exists('format_date')) {
    function format_date($date) {
        return ($date instanceof DateTime) ? Carbon::parse($date)->format('Y-M-d') : null;
    }
}

/**
 * Format Date Long - 16th March 2018
 */
if(! function_exists('format_date_long')) {
    function format_date_long($date) {
        return ($date instanceof DateTime) ? Carbon::parse($date)->format('j F Y') : null;
    }
}
