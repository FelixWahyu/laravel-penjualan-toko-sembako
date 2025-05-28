<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    public function index()
    {
        $hours = Carbon::now('Asia/Jakarta')->hour;

        if ($hours >= 5 && $hours < 12) {
            $greeting = "Selamat Pagi";
        } elseif ($hours >= 12 && $hours < 15) {
            $greeting = "Selamat Siang";
        } elseif ($hours >= 15 && $hours < 18) {
            $greeting = "Selamat Sore";
        } else {
            $greeting = "Selamat Malam";
        }

        return view('donatur.dashboard', compact('greeting'));
    }
}
