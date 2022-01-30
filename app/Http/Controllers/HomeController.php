<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Voucher
};

class HomeController extends Controller
{
    public function index()
    {
        $vouchers = Voucher::all();
        return view('index', compact('vouchers'));
    }
}
