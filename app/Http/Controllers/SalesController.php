<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        $activeNavItem = 'sales';
        return view('sales.penjualan', compact('activeNavItem'));
    }

}
