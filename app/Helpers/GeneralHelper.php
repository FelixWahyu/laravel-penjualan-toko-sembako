<?php

namespace App\Helpers;

use Carbon\Carbon;

class GeneralHelper
{
    public static function getGreeting()
    {
        $hours = Carbon::now('Asia/Jakarta')->hour;

        if ($hours >= 5 && $hours < 12) {
            return "Selamat Pagi";
        } elseif ($hours >= 12 && $hours < 15) {
            return "Selamat Siang";
        } elseif ($hours >= 15 && $hours < 18) {
            return "Selamat Sore";
        } else {
            return "Selamat Malam";
        }
    }
}
