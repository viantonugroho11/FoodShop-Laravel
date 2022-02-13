<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi;
class LaporanController extends Controller
{
    //
    public function index()
    {
        $transaksi=Transaksi::leftjoin('users','users.id','transaksis.id_user')->
        select('transaksis.*','users.name as UsrNama')->latest()->get();
        return view('Admin.laporan.index',compact('transaksi'));
    }
}
