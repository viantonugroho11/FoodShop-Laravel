<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaksi;

class HomeController extends Controller
{
    //
    public function index()
    {
        $home=Product::all();
        return view('Admin.dashboard',compact('home'));
    }
}
