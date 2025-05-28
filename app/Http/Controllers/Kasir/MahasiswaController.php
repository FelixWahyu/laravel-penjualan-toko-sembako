<?php

namespace App\Http\Controllers\Kasir;

use App\Helpers\GeneralHelper;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    public function index()
    {
        $greeting = GeneralHelper::getGreeting();

        return view('dashboard', compact('greeting'));
    }

    public function riwayat()
    {
        return view('riwayat');
    }

    public function listProduk()
    {
        return view('list-produk');
    }
}
