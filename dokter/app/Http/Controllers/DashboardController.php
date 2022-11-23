<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $obats = DB::table('obat')->select('nama_obat', 'stok')->get();
        $dokters = DB::table('dokter')->selectRaw('keahlian, count(keahlian) as jumlah')
            ->groupBy('keahlian')->get();
        return view('admin.index', compact('obats', 'dokters'));
    }
}
