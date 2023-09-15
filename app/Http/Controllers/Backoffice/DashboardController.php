<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Letter;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'sktm' => Letter::where('id_jenis_surat', 2)->count(),
            'domisili' => Letter::where('id_jenis_surat', 1)->count(),
            'keputusan' => Letter::where('id_jenis_surat', 3)->count(),
            'tt' => Letter::where('id_jenis_surat', 4)->count(),
            'undangan' => Letter::where('id_jenis_surat', 5)->count(),
        ];
        return view('pages.dashboard')->with('data', $data);
    }
}
