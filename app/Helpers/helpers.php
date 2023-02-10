<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * Format a phone number to use dashes
 * 
 * @param $nr 
 * @return '###-###-####'
 */
if(! function_exists('hyphenate')) {
    function hyphenate($nr) {
        return substr($nr, 0, 3).'-'.substr($nr, 3, 3).'-'.substr($nr, 6, 4);
      //  return implode("-", str_split($str, 3));
    }
}

/**
 * Format Date
 * 
 * @param $date
 * @return 'Y-M-d'
 */
if(! function_exists('format_date')) {
    function format_date($date) {
        return ($date instanceof DateTime) ? Carbon::parse($date)->format('Y-M-d') : null;
    }
}

/**
 * Format Date Long - 16th March 2018
 * 
 * @param $date
 * @return 'j F Y'
 */
if(! function_exists('format_date_long')) {
    function format_date_long($date) {
        return ($date instanceof DateTime) ? Carbon::parse($date)->format('j F Y') : null;
    }
}

/**
 * Calculate Age from Date of Birth
 * 
 * @param $dob
 * @return $age 
 */
if(! function_exists('calc_age')) {
    function calc_age($dob) {
        $dateOfBirth = Carbon::parse($dob)->format('d-M-Y');
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dateOfBirth), date_create($today));
        return $diff->format('%y');
        
        //$diff->format('%y');

    }
}

/**
 * Convert Status
 */
/*
if(! function_exists('status')) {
    function status($status_code) {

        if($status_code == 'active') {
            return 1;
        } else if ($status_code == 'inactive'){
            return 2;
        }
    }
} 
*/

/**
 * Convert Status
 * 
 * @param $status_code
 * return String
 */
if(! function_exists('statusConvert')) {
    function statusConvert($status_code) {
        switch($status_code):
            case '1':
                return 'Active';
            break;
            case '2':
                return 'Inactive';
             break;
            case '3':
                return 'New';
            break;
            case '4':
                return 'Pending';
            break;
            case '5':
                return 'Approved';
            break;
            case '6':
                return 'Not Approved';
            break;
            case '7':
                return 'Expired';
            break;
            case '8':
                return 'Cancelled';
            break;
            default:
                return '';
                break;
       endswitch;
    }
}
