<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersegiPanjangController extends Controller
{
    public function index()
    {
        return view('persegipanjang');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'panjang' => 'required|numeric|min:0',
            'lebar' => 'required|numeric|min:0',
        ]);

        $panjang = $request->input('panjang');
        $lebar = $request->input('lebar');
        $keliling = $this->calculateKeliling($panjang, $lebar);

        return view('persegipanjang', compact('panjang', 'lebar', 'keliling'));
    }

    private function calculateKeliling($panjang, $lebar)
    {
        return 2 * ($panjang + $lebar);
    }
}
