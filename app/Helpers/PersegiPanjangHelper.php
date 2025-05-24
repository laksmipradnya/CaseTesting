<?php

namespace App\Helpers;

class PersegiPanjangHelper
{
    public static function hitungKeliling($panjang, $lebar)
    {
        return 2 * ($panjang + $lebar);
    }
}
