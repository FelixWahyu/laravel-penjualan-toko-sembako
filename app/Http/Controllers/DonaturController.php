<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Helpers\GeneralHelper;

class DonaturController extends Controller
{
    public function index()
    {
        $greeting = GeneralHelper::getGreeting();

        return view('donatur.dashboard', compact('greeting'));
    }
}
