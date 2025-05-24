<?php

namespace App\Http\Controllers;

use App\Helpers\HitungHelper;
use Illuminate\Http\Request;

class PersegiPanjangController extends Controller
{
    public function index()
    {
        return view('keliling');
    }

    public function hitung(Request $request)
    {
        $request->validate([
            'panjang' => 'required|numeric|min:0',
            'lebar' => 'required|numeric|min:0',
        ]);

        $panjang = $request->input('panjang');
        $lebar = $request->input('lebar');

        $keliling = HitungHelper::kelilingPersegiPanjang($panjang, $lebar);

        return view('keliling', compact('panjang', 'lebar', 'keliling'));
    }
}
