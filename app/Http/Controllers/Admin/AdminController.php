<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\GeneralHelper;

class AdminController extends Controller
{
    public function index()
    {
        $greeting = GeneralHelper::getGreeting();

        return view('admin.dashboard', compact('greeting'));
    }

    public function laporanPenjualan(Request $request)
    {
        return view('admin.penjualan');
    }

    public function laporanKeuangan(Request $request)
    {
        return view('admin.keuangan');
    }

    public function allUser(Request $request)
    {
        return view('admin.users');
    }
}
