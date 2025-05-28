<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\PersegiPanjangHelper;

class PersegiPanjangController extends Controller
{
    public function index()
    {
        return view('persegipanjang');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'panjang' => 'required|numeric|min:1',
            'lebar' => 'required|numeric|min:1',
        ]);

        $panjang = $request->input('panjang');
        $lebar = $request->input('lebar');
        $keliling = PersegiPanjangHelper::hitungKeliling($panjang, $lebar);

        return view('persegipanjang', compact('panjang', 'lebar', 'keliling'));
    }
}
